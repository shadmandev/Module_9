@extends('layouts.app')

@section('title','Create Project')

@push('css')

@endpush

@section('content')
    <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>Create Project</div>
            <div>
                <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg px-4 me-md-2 mr-3">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Project Name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush
