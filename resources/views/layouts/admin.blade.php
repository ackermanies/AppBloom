<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | AppBloom Admin</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
</head>

<body class="admin-body">
<div class="d-flex">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3 class="logo">
            📱 AppBloom
        </h3>

        <small class="text-muted">
            Admin Panel
        </small>

        <hr>
        <a href="{{ route('dashboard') }}" class="sidebar-link">
            📊 Dashboard
        </a>

        <a href="{{ route('applications.index') }}" class="sidebar-link">
            📱 Applications
        </a>

        <hr>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout-btn">
                🚪 Logout
            </button>
        </form>
    </aside>

    <!-- Content -->
    <main class="admin-content">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
            ✅ {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4">
        <strong>Oops!</strong>
            <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>

        <button class="btn-close"
            data-bs-dismiss="alert">
        </button>
    </div>
    @endif

    @yield('content')
</main>
</div>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>

@stack('scripts')

</body>
</html>