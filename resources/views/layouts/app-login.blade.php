<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="شهریار بیات">

    <title>وارد شوید</title>

    <!-- Custom fonts for this template-->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}"/>--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins:300i,400,600"/>

<!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

    @stack('css')
</head>

<body id="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            @yield('content')

        </div>

    </div>

</div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{--<script src="{{ asset('assets/js/fontawesome5-3-1.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/bootstrap-iconpicker.min.js') }}"></script>--}}

@stack('js')


</html>
