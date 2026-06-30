@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="apps-header">
    <div class="container text-center">
        <h1>About AppBloom</h1>

        <p>
            AppBloom is a mobile application catalog website that helps users
            discover popular applications from various categories including
            communication, entertainment, productivity, and design.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <img src="{{ asset('images/about.png') }}" class="img-fluid rounded-4 shadow" alt="About AppBloom">
            </div>

            <div class="col-lg-6">

                <h2 class="section-title mb-4">
                    Discover Better Apps Every Day
                </h2>

                <p class="hero-text">
                    AppBloom was created to provide a simple and attractive platform
                    where users can explore information about popular mobile
                    applications in one place.
                </p>

                <p class="hero-text">
                    From communication to productivity and entertainment,
                    AppBloom helps users discover applications that fit their
                    daily needs.
                </p>

            </div>

        </div>

    </div>
</section>

@endsection