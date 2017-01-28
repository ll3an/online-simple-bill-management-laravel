@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Actions</div>

                <div class="panel-body">
                    <a href='{{ url('/new-bill-form') }}' class="btn btn-primary btn-block">New Bill</a>
                    <a href='{{ url('/all-due') }}' class="btn btn-danger btn-block">All Due</a>
                    <a href='{{ url('/all-paid') }}' class="btn btn-success btn-block">All Paid</a>
                    <a href='{{ url('/customers') }}' class="btn btn-warning btn-block">Customers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
