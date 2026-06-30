@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="apps-header">
    <div class="container text-center">
        <h1>Contact Us</h1>

        <p>
            We'd love to hear from you. Feel free to send us a message.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="app-card p-4">

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea rows="5" class="form-control"></textarea>
                        </div>

                        <button class="btn hero-btn">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection