@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-primary h-100">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text fs-2 fw-bold">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-success h-100">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text fs-2 fw-bold">{{ $totalOrders }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-warning h-100">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text fs-2 fw-bold">{{ $totalProducts }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card text-bg-danger h-100">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text fs-2 fw-bold">${{ number_format($totalRevenue, 2) }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
