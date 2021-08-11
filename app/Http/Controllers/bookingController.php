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
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        //$destination = $request->destinations;
        $destination = "1,2,3";
        $guests = $request->tickets;
        $date = $request->date;
        $cc_num = $request->cc_num;
        $cc_exp_month = $request->month;
        $cc_exp_year = $request->year;
        $amount = $request->amount;
        $cvc = $request->cvc;


        $payment = new paymentController();
        $attempt = $payment->processPayment($cc_num, $cc_exp_month, $cc_exp_year, $amount, $cvc);
        if (!empty($attempt)) {
            echo "Charge successful";
            $booking->save([$fname, $lname, $email, $phone, $destination, $guests, $date, $amount, '1111', $attempt]);
        } else {
            echo "charge not succesful";
        }
    }
}
