@extends('layouts.admin')

@section('title', 'Applications')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">
        Applications
    </h2>

    <div class="d-flex gap-2">
        <a href="{{ route('applications.pdf') }}" class="btn btn-danger">
            Export PDF
        </a>

        <a href="{{ route('applications.create') }}" class="btn hero-btn">
            + Add Application
        </a>
    </div>
</div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <table id="applicationTable" class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Developer</th>
                        <th>Version</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($applications as $app)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/' . $app->image) }}"
                                 width="70"
                                 class="rounded">
                        </td>

                        <td>{{ $app->name }}</td>
                        <td>{{ $app->developer }}</td>
                        <td>{{ $app->version }}</td>
                        <td>
                            <a href="{{ route('applications.edit', $app->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('applications.destroy', $app->id) }}"
                                method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this application?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
$(document).ready(function(){
    $('#applicationTable').DataTable({
        pageLength:5,
        language:{
            search:"Search:",
            lengthMenu:"Show _MENU_ entries",
            info:"Showing _START_ to _END_ of _TOTAL_ entries"
        }
    });
});
</script>

@endpush