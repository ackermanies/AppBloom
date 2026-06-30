@extends('layouts.app')

@section('title', $application->name)

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="{{ asset('images/' . $application->image) }}"
                     class="img-fluid rounded-4 shadow"
                     style="max-width:300px;">
            </div>

            <div class="col-lg-7">
                <h1 class="fw-bold mb-3">
                    {{ $application->name }}
                </h1>

                <h5 class="text-muted mb-3">
                    {{ $application->developer }}
                </h5>

                <span class="badge bg-primary mb-4">
                    Version {{ $application->version }}
                </span>

                <p style="text-align:justify;">
                    {{ $application->description }}
                </p>

                <a href="{{ route('apps') }}" class="btn hero-btn mt-3">
                    ← Back
                </a>
            </div>
        </div>
    </div>
</section>

@endsection