<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>klaustro.net</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/mdi.css') }}">
    <link rel="stylesheet" href="{{ url('css/fl-bigmug-line.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
        <![endif]-->
  </head>
  <body>
    <div id="app">
      <!-- Page preloader-->
        @include('front.loader')
      <!-- Page-->
      <div class="page">
        <!-- Page Header-->
          <navbar
            :user="{{ json_encode(auth()->user()) }}"
            :errors="{{ $errors }}"
          ></navbar>
        <!-- Content -->
        @yield('content')

        <!-- Page Footer-->
        @include('front.footer')

      </div>
      <!-- Global Mailform Output-->
      <div class="snackbars" id="form-output-global"></div>

    </div>
    <!-- Javascript-->
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/core.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
  </body>
</html>