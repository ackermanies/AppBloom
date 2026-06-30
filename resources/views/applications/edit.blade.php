@extends('layouts.admin')

@section('title', 'Edit Application')

@section('content')

<div class="container-fluid">
    <h2 class="fw-bold mb-4">
        Edit Application
    </h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <form action="{{ route('applications.update', $application->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Application Name</label>
                    <input type="text"
                           class="form-control"
                           name="name"
                           value="{{ old('name', $application->name) }}">
                </div>

                <div class="mb-3">
                    <label>Developer</label>
                    <input type="text"
                           class="form-control"
                           name="developer"
                           value="{{ old('developer', $application->developer) }}">
                </div>

                <div class="mb-3">
                    <label>Version</label>
                    <input type="text"
                           class="form-control"
                           name="version"
                           value="{{ old('version', $application->version) }}">
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea
                        class="form-control"
                        rows="5"
                        name="description">{{ old('description', $application->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label>New Image (optional)</label>
                    <input
                        type="file"
                        class="form-control"
                        name="image">
                </div>

                <button class="btn hero-btn">
                    Update
                </button>

                <a href="{{ route('applications.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>
            </form>
        </div>
    </div>
</div>

@endsection