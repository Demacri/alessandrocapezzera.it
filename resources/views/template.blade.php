<!DOCTYPE html>
<html lang="{{ session('locale') }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alessandro Capezzera - Software Engineer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" type="text/css">

  @vite(['resources/css/app.scss'])

  <!--
    Template credits to:
    =======================================================
    * Template Name: MyResume - v4.3.0
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ========================================================
  -->
</head>

<body class="@yield('body-class')">

  @yield('body')
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    const RECAPTCHA_SITE_KEY = '{{ env('RECAPTCHA_SITE_KEY') }}';
  </script>
  @vite(['resources/js/app.js'])

</body>

</html>
