@extends('layouts.app')


@section('content')
<h1>Welcome to Dashboard</h1>
<div class="row py-3">
    <div class="col-md-4">
        <div class="card bg-primary text-center p-2">
            <h2 class="text-light">Orders</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-center p-2">
            <h2 class="text-light">Amount</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-danger text-center p-2">
            <h2 class="text-light">Pending Orders</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card bg-success text-center p-2">
            <h2 class="text-light">Orders Completed</h2>
        </div>
    </div>
</div>


@endsection