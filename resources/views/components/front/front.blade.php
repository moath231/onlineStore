<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $title ?? '' }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="generator" content="Geany 1.37.1" />

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <!-- Place favicon.ico in the root directory -->

  
  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="{{ asset("style/style.css") }}">
  <link rel="stylesheet" href="{{ asset("style/app.css") }}">
</head>

<body>
  <div class="wrapper bg-dark-white">

    <header id="sticky-menu" class="header header-2">
      <x-front.navbar/>
    </header>

    {{ $slot }}

    <x-front.footer/>
  </div>



</body>

</html>
