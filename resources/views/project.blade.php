@extends('layouts.app')

@section('title','Projects')

@push('css')

@endpush

@section('content')

<section class="container pt-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="h2 text-center pb-4">Projects</h2>
        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg px-4 me-md-2 mr-3">Create New</a>
    </div>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <img src="https://devshadman.com/wp-content/uploads/2023/06/support.svg" >
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{$project->name}}</h5>
                        <p class="card-text">
                            {{ $project->description }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div>
                            {{-- <span>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            </span> --}}
                            <span>
                                <button type="button" class="btn btn-danger btn-sm text-white" onclick="deleteData({{ $project->id }})">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                                <form id="delete-form-{{ $project->id }}"
                                    action="{{ route('projects.destroy',$project->id) }}" method="POST"
                                    style="display: none;">
                                        @csrf()
                                        @method('DELETE')
                                </form>
                                {{-- <a href="{{ route('projects.destroy', $project->id) }}" class="btn btn-danger btn-sm text-white"><i class="fa-regular fa-trash-can"></i></a> --}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

@push('js')
@endpush
