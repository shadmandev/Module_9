@extends('layouts.app')

@section('title','About')

@push('css')

@endpush

@section('content')
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
          <img style="width:400px;" class="rounded" loading="lazy" src="https://devshadman.com/wp-content/uploads/2023/06/Devshadman.png" alt="">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 class="h1 mb-3">Who Are We?</h2>
              <p class="lead fs-4 text-secondary mb-3">Full-Stack Developer & WordPress Specialist</p>
              <p class="mb-5">I’m hard working & Passionate at web development. I’m working minimum of 10-12 hours every day, I love to do this it’s my life-everything. My goal is to satisfy clients, try to understand what they want for there website, help them from beginning to end the project and give support for every problem. If you need I communicate by video or audio conversations to understand the problems and project requirements. After completing website and projects I give instructions, How they can manage, edit, update, add page and post on the website by themselves. if needed I send video tutorials.</p>
              <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 me-md-2 mr-3">let's Build Your Website</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('js')
@endpush
