@extends('admin.layouts.admin')
@section('title', '')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; background: linear-gradient(135deg, #f8f9fa, #eef2f7);">
    <div class="card shadow-lg border-0 p-5 rounded-4" style="max-width: 900px; width: 100%; background: #fff;">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark" style="font-size: 2.5rem;">📦 Product Management</h1>
            <p class="text-muted mb-0">Manage and organize products across all categories with ease</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Healthy Foods -->
            <div class="col-md-4">
                <a href="{{ route('admin.healthyfoods.index') }}" 
                   class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 transition" 
                         style="cursor: pointer; background: linear-gradient(135deg, #4caf50, #81c784); color: #fff;">
                        <div class="mb-3 fs-1">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h5 class="fw-bold">Healthy Foods</h5>
                        <p class="small">Manage nutrition-rich food products</p>
                    </div>
                </a>
            </div>

            <!-- Clothes -->
            <div class="col-md-4">
                <a href="{{ route('admin.cloths.index') }}" 
                   class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 transition" 
                         style="cursor: pointer; background: linear-gradient(135deg, #1976d2, #64b5f6); color: #fff;">
                        <div class="mb-3 fs-1">
                            <i class="bi bi-bag-check"></i>
                        </div>
                        <h5 class="fw-bold">Clothes</h5>
                        <p class="small">Update and manage clothing products</p>
                    </div>
                </a>
            </div>

            <!-- Foods -->
            <div class="col-md-4">
                <a href="{{ route('admin.foods.index') }}" 
                   class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 transition" 
                         style="cursor: pointer; background: linear-gradient(135deg, #ff9800, #ffb74d); color: #fff;">
                        <div class="mb-3 fs-1">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <h5 class="fw-bold">Foods</h5>
                        <p class="small">Manage food and beverages</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .transition:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25) !important;
    }
</style>
@endpush
@endsection
