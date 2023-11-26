<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- Css Start Here --}}
        @stack('css')

    </head>
    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <x-navbar/>

            <div class="main-content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        @stack('js')
    </body>
</html>
