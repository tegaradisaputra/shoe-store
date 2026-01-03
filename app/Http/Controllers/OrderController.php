<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function saveOrder(Shoe $slug)
    {
        return view('front.save_order');
    }

    public function booking(Shoe $slug)
    {
        return view('front.booking');
    }

    public function customerData(Shoe $slug)
    {
        return view('front.customer_data');
    }

    public function saveCustomerData(Shoe $slug)
    {
        return view('front.save_customer_data');
    }

    public function payment(Shoe $slug)
    {
        return view('front.payment');
    }

    public function paymentConfirm(Shoe $slug)
    {
        return view('front.payment_confirm');
    }

    public function orderFinished(Shoe $slug)
    {
        return view('front.order_finished');
    }
}
