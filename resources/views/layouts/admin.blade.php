<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('admin/css/material-dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css')}}">

      <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">



    <!-- Scripts -->

</head>
<body class="g-sidenav-show  bg-gray-200">
    <div class="wrapper">
        @include('layouts.inc.sidebar')

        <div class="main-panel">
            @include('layouts.inc.adminnav')

            <div class="content">
                @yield('content')
            </div>
              
            @include('layouts.inc.adminfooter')
        </div>
    </div>

    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js')}}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif


    @yield('scripts')
   
</body>
</html>
