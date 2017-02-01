@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3>New Bill</h3></div>

                <div class="panel-body">
                    <form id="new-bill-form" class="form-horizontal" method="POST" action="/create-bill">
                    	
                    	<div class="form-group">
						    <label for="inputBillNumber" class="col-sm-3 control-label">Customer</label>
						    <div class="col-sm-9">
						    	<select class="form-control">
						    		@foreach ($customers as $customer)
						    			<option value="{{ $customer->id }}">{{ $customer->name }}</option>
						    		@endforeach
								</select>
						    </div>
					    </div>

						<div class="form-group">
						    <label for="inputBillNumber" class="col-sm-3 control-label">Bill Number</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" id="bill-number" placeholder="Enter Bill Number">
						    </div>
					    </div>

					    <div class="form-group">
						    <label for="inputTotalAmount" class="col-sm-3 control-label">Total Amount</label>
						    <div class="col-sm-9">
						    	<input v-model='total_amount' type="number" class="form-control" id="total_amount" placeholder="Enter total bill amount">
						    </div>
					    </div>

					    <div class="form-group">
						    <label for="inputBillPaid" class="col-sm-3 control-label">Total Paid</label>
						    <div class="col-sm-9">
						    	<input v-model='total_paid' type="number" class="form-control" id="total_paid" placeholder="Enter initial paid amount">
						    </div>
					    </div>
					    <div class="form-group">
						    <label for="inputTotalDue" class="col-sm-3 control-label">Total Due</label>
						    <div class="col-sm-9">
						    	<input disabled :value="total_due" type="text" class="form-control" id="bill-number" placeholder="Total due">
						    </div>
					    </div>

					    <div class="form-group">
						    <label for="inputCurrentDate" class="col-sm-3 control-label">Date</label>
						    <div class="col-sm-9">
						    	<input disabled type="text" class="form-control" id="current_date" placeholder="Today's date" value="<?php echo date('Y-m-d H:i:s'); ?>">
						    </div>
					    </div>

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						    	<button type="submit" class="btn btn-primary pull-right">Add Bill</button>
						    </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
