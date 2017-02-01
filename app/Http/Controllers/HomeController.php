<?php

namespace App\Http\Controllers;

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

    public function newBillForm()
    {
        $customers = Customer::all()->sortBy('name');
        // dd($customers);
        return view('new-bill-form', compact('customers'));
    }
}
