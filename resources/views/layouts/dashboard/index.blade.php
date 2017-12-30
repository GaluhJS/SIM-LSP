<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM-LSP | @yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">


</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
    @include('layouts.dashboard.navbar')

    @include('layouts.dashboard.sidebar')

    <div class="content-wrapper">
      <section class="content-header">
        @yield('content-header')
      </section>

      <section class="content">
        @yield('content')
      </section>
    </div>

    @include('layouts.dashboard.footer')
  </div>

  <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>

  @yield('javascript')

  <script src="{{ asset('js/number_format_currency.js') }}"></script>
  <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
</body>
</html>
