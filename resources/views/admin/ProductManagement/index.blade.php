@extends('admin.layouts.admin')
@section('title', '')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh; gap: 40px;">
    <h1 class="fw-bold" style="font-size: 2.5rem; text-align: center;">Product Management</h1>

    <div class="btn-group" role="group" aria-label="Product Categories" style="gap: 20px;">
        <a href="{{ route('admin.healthyfoods.index') }}" class="btn btn-outline-primary px-4 py-3 fw-semibold" style="min-width: 180px; border-radius: 8px; box-shadow: 0 3px 8px rgba(0,0,0,0.1);">
            Healthy Foods
        </a>
        <a href="{{ route('admin.cloths.index') }}" class="btn btn-outline-success px-4 py-3 fw-semibold" style="min-width: 180px; border-radius: 8px; box-shadow: 0 3px 8px rgba(0,0,0,0.1);">
             Clothes
        </a>
        <a href="{{ route('admin.foods.index') }}" class="btn btn-outline-warning px-4 py-3 fw-semibold" style="min-width: 180px; border-radius: 8px; box-shadow: 0 3px 8px rgba(0,0,0,0.1);">
            Foods
        </a>
    </div>
</div>
@endsection
