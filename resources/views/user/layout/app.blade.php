<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Crystal Group</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/main.css') }}">

   @stack('css')

</head>

<body>

    @include('user.partials.loader')

    <!-- ***** Header Area End ***** -->
    @include('user.partials.header')

    @stack('main')

    <!-- ***** Footer Section ***** -->
    @include('user.partials.footer')

    <!-- jQuery -->
    <script src="{{ asset('user/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('user/assets/js/popper.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('user/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/imgfix.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>

</body>

</html>