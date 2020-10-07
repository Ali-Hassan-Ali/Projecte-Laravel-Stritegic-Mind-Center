<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!--Link Icon Title-->
{{--    <link href="img/favicon.png" rel="icon">--}}

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

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">

</head>
<body>
<!--loading pages-->
{{--<div class="ff d-flex text-center m-auto align-items-center">--}}

{{--    <div class="spinner">--}}
{{--        <div class="rect1"></div>--}}
{{--        <div class="rect2"></div>--}}
{{--        <div class="rect3"></div>--}}
{{--        <div class="rect4"></div>--}}
{{--        <div class="rect5"></div>--}}
{{--        Loading.....--}}
{{--    </div>--}}

{{--</div>--}}
<!--</div>&lt;!&ndash;end of loading&ndash;&gt;-->


<!-- /.modal -->
@include('partials._session')

@yield('content')

@include('layouts.include._footer')

@include('layouts.include._social')

<!-- jquery -->
<script src="{{ asset('dist/js/jquery-3.3.1.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{ asset('dist/js/bootstrap.min.js')}}"></script>

<!-- vendor  js -->
<script src="{{ asset('dist/js/vendor.min.js')}}"></script>

<!-- note.min.js -->
<script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

<!-- min scripts -->
<script src="{{ asset('dist/js/main.min.js')}}"></script>

<!-- scripts Wow-->
<script>
    wow = new WOW(
        {
            // boxClass:     'wow',      // default
            // animateClass: 'animated', // default
            offset: 3,          // default
            mobile: true,       // default
            live: true        // default
            // data-wow-iteration="2" /*Loop*/
        },
    );
    wow.init();

    // image preview
    $(".image").change(function () {

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-preview').attr('src', e.target.result);
            };/*render onload*/

            reader.readAsDataURL(this.files[0]);
        };/*end if file*/

    });/*end of chang function image preview*/

</script>

@yield('script')

</body>
</html>
