<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Jquery -->
    <script src="{{ URL::asset('AdminLTE/plugins/jquery/jquery.js') }}"></script>
    <!-- ToastR -->
    <script src="{{ URL::asset('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/toastr/toastr.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
</head>

<!-- 
 <-- jQuery 
 <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
 <-- jQuery UI 1.11.4 
 <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
 <-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
 <script>
   $.widget.bridge('uibutton', $.ui.button)
 </script>
 <-- Bootstrap 4 
 <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <-- ChartJS 
 <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
 <-- Sparkline 
 <script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
 <-- JQVMap 
 <script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
 <script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
 <-- jQuery Knob Chart 
 <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
 <-- daterangepicker 
 <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
 <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
 <-- Tempusdominus Bootstrap 4 
 <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <-- Summernote 
 <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
 <-- overlayScrollbars 
 <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
-->