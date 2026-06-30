@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-2">
        Dashboard
    </h2>

    <p class="text-muted mb-5">
        Welcome back,
        <strong>{{ Auth::user()->name }}</strong> 👋
    </p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5>📱 Total Applications</h5>

                <h1>{{ $totalApps }}</h1>

                <p class="text-muted mb-0">
                    Mobile applications in database
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5>👤 Administrator</h5>

                <h1>{{ $totalAdmins }}</h1>

                <p class="text-muted mb-0">
                    Active administrator account
                </p>
            </div>
        </div>

    </div>

</div>

@endsection