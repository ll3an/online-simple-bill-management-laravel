<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Payment;
use App\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * show the New bill form
     * @return \Illuminate\Http\Response
     */
    public function newBillForm()
    {
        $customers = Customer::all()->sortBy('name');
        return view('new-bill-form', compact('customers'));
    }

    /**
     * Store the submitted Bill via New Bill Form and also the initial payment as the First payment
     * @return [type] [description]
     */
    public function createBill(Request $request)
    {
        $this->validate($request,[
                'bill_number' => 'required',
                'amount' => 'required',
                'total_paid' => 'required'
            ]);
        $bill = new Bill;

        $bill->customer_id = $request->customer_id;
        $bill->bill_number = $request->bill_number;
        $bill->amount = $request->amount;
        $bill->created_at = $request->created_at;

        $bill->save();

        if($request->total_paid != 0){
            $payment = new Payment;
        
            $payment->bill_id = $bill->id;
            $payment->amount = $request->total_paid;

            $payment->save();
        }

        dd($request->toArray());

    }

}
