<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $title }}</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />

  {{-- fontawsome --}}
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css">
  <script src="{{ asset('js/all.min.js') }}" type="text/javascript"></script>

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
  {{-- <script src="{{ asset('backend/js/popper.min.js') }}"></script> --}}
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/main.js') }}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>

</body>

</html>
