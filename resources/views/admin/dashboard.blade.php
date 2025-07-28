@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-primary shadow-sm border-0">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Users</h6>
                    <h3 class="fw-bold">{{ $totalUsers }}</h3>
                </div>
                <i class="bi bi-people-fill fs-1"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-success shadow-sm border-0">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Orders</h6>
                    <h3 class="fw-bold">{{ $totalOrders }}</h3>
                </div>
                <i class="bi bi-cart-check fs-1"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-warning shadow-sm border-0">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Products</h6>
                    <h3 class="fw-bold">{{ $totalProducts }}</h3>
                </div>
                <i class="bi bi-box-seam fs-1"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-danger shadow-sm border-0">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Total Revenue</h6>
                    <h3 class="fw-bold">${{ number_format($totalRevenue, 2) }}</h3>
                </div>
                <i class="bi bi-currency-dollar fs-1"></i>
            </div>
        </div>
    </div>
</div>
@endsection
