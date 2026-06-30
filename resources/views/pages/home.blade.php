@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-overlay">
        <div class="container">
            <div class="row hero-content">
                <div class="col-lg-6 ps-lg-5">
                    <span class="hero-badge">✨ Discover Your Favorite Apps</span>

                    <h1 class="hero-title mt-3">
                        Discover Amazing
                        <span>Mobile Applications</span>
                    </h1>

                    <p class="hero-text mt-4">
                        Explore various mobile applications for productivity,
                        communication, entertainment, and many more.
                    </p>

                    <a href="{{ route('apps') }}" class="btn hero-btn mt-4">
                        Explore Apps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Popular Applications</h2>
            <p class="section-subtitle">
                Discover some of our favorite mobile applications.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="app-card">
                    <img src="{{ asset('images/whatsapp.png') }}" class="img-fluid" alt="WhatsApp">

                    <div class="p-4">
                        <h4>WhatsApp</h4>
                        <small>Meta</small>

                        <p class="mt-3">
                            A messaging application for chatting, voice calls, and video calls.
                        </p>

                        <a href="#" class="btn btn-sm hero-btn mt-2">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="app-card">
                    <img src="{{ asset('images/spotify.png') }}" class="img-fluid" alt="Spotify">

                    <div class="p-4">
                        <h4>Spotify</h4>
                        <small>Spotify AB</small>

                        <p class="mt-3">
                            Listen to millions of songs and podcasts anytime.
                        </p>

                        <a href="#" class="btn btn-sm hero-btn mt-2">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="app-card">
                    <img src="{{ asset('images/canva.png') }}" class="img-fluid" alt="Canva">

                    <div class="p-4">
                        <h4>Canva</h4>
                        <small>Canva Pty Ltd</small>

                        <p class="mt-3">
                            Create beautiful presentations, posters, and social media designs.
                        </p>

                        <a href="#" class="btn btn-sm hero-btn mt-2">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection