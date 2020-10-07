<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home Page</title>
    <!--Link Icon Title-->
    <!--    <link href="img/favicon.png" rel="icon">-->

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css')}}">

    <!--font google-->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- vendor min  css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/vendor.min.css')}}">

    <!-- min styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/min.min.css')}}">
</head>
<body>

@yield('content')

<script src="{{ asset('dist/js/jquery-3.3.1.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{ asset('dist/js/bootstrap.min.js')}}"></script>

<!-- vendor  js -->
<script src="{{ asset('dist/js/vendor.min.js')}}"></script>

<!-- min scripts -->
<script src="{{ asset('dist/js/main.min.js')}}"></script>
</body>
</html>
