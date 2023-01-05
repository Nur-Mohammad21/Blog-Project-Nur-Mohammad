<!DOCTYPE html>
<html lang="en">
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Live Multipurpose Blog Template" />
    <meta name="description" content="Live - Multipurpose Blog Template" />

    <!-- title  -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}front/img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="{{ asset('/') }}front/img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}front/img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}front/img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('/') }}front/search/search.css" />

    <!-- core style css -->
    <link href="{{ asset('/') }}front/css/styles.css" rel="stylesheet" />

</head>

<body>


<!-- start main-wrapper section -->
<div class="main-wrapper">

    <!-- start header section -->
    @include('front.includes.header')
    <!-- end header section -->
    @yield('body')

    <!-- start footer section -->
    @include('front.includes.footer')
    <!-- end footer section -->

</div>
<!-- end main-wrapper section -->

<!-- start scroll to top -->
<a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top -->

<!-- all js include start -->

<!-- JavaScript -->
<script src="{{ asset('/') }}front/js/core.min.js"></script>

<!-- Search -->
<script src="{{ asset('/') }}front/search/search.js"></script>

<!-- custom scripts -->
<script src="{{ asset('/') }}front/js/main.js"></script>

<!-- all js include end -->

</body>


</html>
