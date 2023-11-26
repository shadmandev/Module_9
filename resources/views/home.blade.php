@extends('layouts.app')

@section('title','Home')

@push('css')

@endpush

@section('content')
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-6">
        <iframe src="https://lottie.host/embed/5064b9f9-595c-45f1-b61a-b8b96c065858/K2q1GSW3Dr.json" width="700" height="500"></iframe>
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Md. Shahib Shadman</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 me-md-2 mr-3">Contact Me</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')


@endpush
