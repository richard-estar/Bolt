<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\paymentController;

class bookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function book(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $destination = $request->destinations;
        $guests = $request->tickets;
        $date = $request->date;
        $cc_num = $request->cc_num;
        $cc_exp_month = $request->month;
        $cc_exp_year = $request->year;
        $amount = $request->amount;

        $payment = new paymentController();
        $attempt = $payment->processPayment($cc_num, $cc_exp_month, $cc_exp_year, $amount);
        if ($attempt) {
            echo "Charge successful";
        } else {
            echo "charge not succesful";
        }
    }
}
