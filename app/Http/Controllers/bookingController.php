<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\paymentController;
use App\Models\booking;

class bookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function book(Request $request, booking $booking)
    {
        //Credit card post variable retrieved
        $cc_num = $request->cc_num;
        $cc_exp_month = $request->month;
        $cc_exp_year = $request->year;
        $amount = $request->amount;
        $cvc = $request->cvc;

        //Create object of payment controller
        $payment = new paymentController();

        //Pass credit card details into payment function sent to Authorize.net
        $attempt = $payment->processPayment($cc_num, $cc_exp_month, $cc_exp_year, $amount, $cvc);

        //Check if charge was successful and store variables if so
        if (!empty($attempt)) {
            $booking->lname = $request->lname;
            $booking->email = $request->email;
            $booking->phone = $request->phone;
            $booking->fname = $request->fname;
            $booking->destination = implode(",", $request->destinations);
            $booking->guests = $request->tickets;
            $booking->date = $request->date;
            $booking->total = $amount;
            $booking->lastfour = substr($request->cc_num, -4);
            $booking->transactionId = $attempt;
            $booking->save();
            echo '
            <script type="text/javascript">
    // Callback
    window.onbeforeunload = function(e) {
        // Turning off the event
        e.preventDefault();
    }
</script>
            ';

            return view('result', ["result" => true, "destinations" => $booking->destination, "guests" => $booking->guests, "transactionId" => $attempt, "total" => $booking->total, "date" => $booking->date]);
        } else {
            //advise customer not successful and return to payment page
            echo "charge not succesful";
        }
    }
}
