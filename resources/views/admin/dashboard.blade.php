{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-3">
        <div class="stat-card">
            <h6>Total Users</h6>
            <h2>{{ $totalUsers }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <h6>Students</h6>
            <h2>{{ $totalStudents }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <h6>Admins</h6>
            <h2>{{ $totalAdmins }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <h6>Categories</h6>
            <h2>0</h2>
            <small class="text-muted">Coming soon</small>
        </div>
    </div>
</div>
@endsection