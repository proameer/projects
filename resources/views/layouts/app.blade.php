<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}

       <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('assets/css/lib/toastr/toastr.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


@yield('css')
</head>
<body class="">

    @include('layouts.sidebar')

    @include('layouts.header')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @include('layouts.page-header')
                <!-- /# row -->
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300, 
                placeholder: 'Description',
                direction: 'rtl'
            });
        });

      </script>
    <!-- jquery vendor -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



    @if (Session::has('success'))
    <script>
          toastr.success("{{!! Session::get('success') !!}}");  
       </script>                     
    @endif
    @if (Session::has('primary'))
    <script>
          toastr.success("{{!! Session::get('primary') !!}}");  
       </script>                     
    @endif
    @if (Session::has('danger'))
    <script>
          toastr.success("{{!! Session::get('danger') !!}}");  
       </script>                     
    @endif

    @yield('script')
</body>
</html>
