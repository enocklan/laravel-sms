<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ config('app.name', 'GRAVICOM') }} </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{asset('assets/plugin/datatables/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugin/datatables/dataTables.bootstrap5.min.css')}}">

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('assets/css/ebazar.style.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dVfPRekED/fGfE1AaWcFBNhDjWPaVvXa5djLFw/5mjZRM1RtJmK4pC9VjaAwRhe7kEFz3xoaPAkHKpZRT4mEdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div id="ebazar-layout" class="theme-neutral">

    {{--  Start:Sidebar--}}
    @if(request()->is('admin/*'))
        <livewire:admin.inc.sidebar/>
    @else
        <livewire:customer.inc.sidebar/>
    @endif

    {{--    End:Sidebar--}}
    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        {{--        Start:Header--}}
        @if(request()->is('admin/*'))
            <livewire:admin.inc.header/>
        @else
            <livewire:customer.inc.header/>
        @endif
        {{$slot}}
        {{--        End:Header--}}
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/dataTables.bundle.js')}}"></script>

<!-- Jquery Page Js -->
<script src="{{asset('../shop_backend/js/template.js')}}"></script>
<script src="{{asset('../shop_backend/js/page/index.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap"></script>
<script>
    $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
</script>
@yield('scripts')
<script src="{{ asset('assets/bundles/sweetalert.js') }}"></script>
<x-livewire-alert::scripts/>
</body>
</html>
