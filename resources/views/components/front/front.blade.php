<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $title }}</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logos/logo.svg') }}">

  {{-- fontawsome --}}
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css">
  <script src="{{ asset('js/all.min.js') }}" type="text/javascript"></script>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

  <!-- Bootstrap4 files-->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('css/bootstrap.css?v=1.0') }}" rel="stylesheet" type="text/css" />

  <!-- plugin: fancybox  -->
  <script src="{{ asset('plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
  <link href="{{ asset('plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">

  <!-- custom style -->
  <link href="{{ asset('css/ui.css?V=1.0') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

  {{-- slick carousel --}}
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  @stack('shopPage')
  @stack('updateQuantity')
  @stack('checkout')

</head>

<body>
  <div class="wrapper bg-dark-white" id="products">

    <header id="sticky-menu" class="header header-2 border-bottom">
      <x-front.navbar />
    </header>

    <main class="main">
      {{ $slot }}
    </main>

    <x-front.footer />
  </div>

  <script>
    $(document).ready(function() {

      /* This is basic - uses default settings */

      $("a#single_image").fancybox();

      /* Using custom settings */

      $("a#inline").fancybox({
        'hideOnContentClick': true
      });

      /* Apply fancybox to multiple items */

      $("a.group").fancybox({
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 600,
        'speedOut': 200,
        'overlayShow': false
      });

    });
  </script>
</body>

</html>
