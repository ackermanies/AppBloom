@extends('layouts.app')

@section('title', 'Applications')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<section class="apps-header">
    <div class="container text-center">
        <h1>Applications</h1>
        <p>
            Explore various mobile applications that help make your daily life easier,
            more productive, and more enjoyable.
        </p>
    </div>
</section>

<section class="featured pb-5">
    <div class="container">

        <div class="row g-4">

            @foreach($applications as $application)

            <div class="col-lg-4 col-md-6">

                <div class="app-card">

                    <img src="{{ asset('images/' . $application->image) }}"
                        class="img-fluid"
                        alt="{{ $application->name }}">

                    <div class="p-4">

                        <h4>{{ $application->name }}</h4>

                        <small>{{ $application->developer }}</small>

                        <p class="mt-3">
                            {{ Str::limit($application->description, 80) }}
                        </p>

                        <a href="{{ route('apps.show', $application) }}" class="btn hero-btn btn-sm mt-2">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection