<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
    	$bills = Bill::all();
    	$bills->load('Customer');
    	return $bills;
    }

    public function listBills()
    {
    	return view('bills.list');
    }
}
