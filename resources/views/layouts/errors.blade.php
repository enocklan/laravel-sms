<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ERROR | 🚨 </title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('assets/css/ebazar.style.min.css')}}">
</head>
<body>
<div id="ebazar-layout" class="theme-blue">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5">

        @yield('content')

    </div>

</div>

<!-- Jquery Core Js -->
@yield('scripts')
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
</body>
</html>
