<footer class="mt-5 py-5" style="background:#F8FBFF;border-top:1px solid #EAEAEA;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="navbar-brand mb-3">
                    📱 AppBloom
                </h4>

                <p class="text-muted">
                    Discover popular mobile applications with a clean,
                    simple, and beautiful browsing experience.
                </p>
            </div>

            <div class="col-lg-3">
                <h5>Quick Links</h5>

                <ul class="list-unstyled mt-3">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('apps') }}">Applications</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3">
                <h5>Contact</h5>

                <p class="text-muted mt-3">
                    support@appbloom.com
                </p>

                <p class="text-muted">
                    Indonesia
                </p>
            </div>
        </div>

        <hr>
        <div class="text-center text-muted">
            © {{ date('Y') }} AppBloom. All Rights Reserved.
        </div>
    </div>
</footer>