<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('mobile/assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('mobile/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('mobile/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('mobile/__manifest.json') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="javascript:void(0)" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">@yield('topbarPageTitle')</div>
        <div class="right">
            @yield('topbarRightButton')
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="header-large-title">
            <h1 class="title">@yield('pageTitle')</h1>
        </div>
        @yield('content')
        @yield('footer')
    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    @can('accountVerified')
    @cannot('Konsumen')
    @include('layouts.mobile.partials.bottomMenu')
    @endcannot
    @endcan
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    @include('layouts.mobile.partials.sidebar')
    <!-- * App Sidebar -->

    <div id="toast-12" class="toast-box toast-center">
        <div class="in">
            <div class="text">
                Berhasil disalin
            </div>
        </div>
    </div>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('mobile/assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset('mobile/assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('mobile/assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    {{-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('mobile/assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('mobile/assets/js/base.js') }}"></script>

    @include('layouts.alert')
    @include('layouts.dataTable')
    @stack('jsRental')
    @stack('js')
</body>

</html>
