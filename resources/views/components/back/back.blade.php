<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." />
  <title>{{ $title }}</title>
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
</head>

<body class="app sidebar-mini rtl">

  <head>
    <x-back.navBar />
    <x-back.aside />
  </head>


  <main class="app-content">
    {{ $slot }}
  </main>

  <script src="{{ asset('js/jquery-2.0.0.min.js') }}"></script>
  <script src="{{ asset('backend/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/main.js') }}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>

</body>

</html>
