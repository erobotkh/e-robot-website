<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('site-title')</title>

    <meta name="description" content="E-Robot is a team that comes with a pure heart of cambodia youths.">
    <meta name="keywords" content="">
    <meta name="author" content="E_Robot_Development_Team">

    <!-- Favicons -->
    <link rel="icon" href="{{asset("assets/img/erobot-no-bg.png")}}">


    {{-- <link href="{{ url('assets/img/favicon.png') }}" rel="icon"> --}}
    {{-- <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link href="{{ url('https://fonts.gstatic.com') }}" rel="preconnect">
    <link
        href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ url('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- ck editor -->

    <link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/custom.css') }}" rel="stylesheet"
        type="text/css">

    <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}">
    </script>
    <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    @yield('content')
</body>

</html>
