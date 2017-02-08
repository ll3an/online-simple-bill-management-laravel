@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3>List Bills</h3></div>

                <div class="panel-body">
                    <bill-list></bill-list>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection