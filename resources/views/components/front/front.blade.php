<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    {{-- fontawsome --}}
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css">
    <script src="{{ asset('js/all.min.js') }}" type="text/javascript"></script>

    <!-- jQuery -->
    <script src="{{ asset("js/jquery-2.0.0.min.js") }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}" type="text/javascript"></script>
    <link href="{{ asset("css/bootstrap.css?v=1.0") }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset("fonts/fontawesome/css/fontawesome-all.min.css") }}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset("plugins/fancybox/fancybox.min.js") }}" type="text/javascript"></script>
    <link href="{{ asset("plugins/fancybox/fancybox.min.css") }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset("plugins/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
    <link href="{{ asset("plugins/owlcarousel/assets/owl.theme.default.css") }}" rel="stylesheet">
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="{{ asset("css/ui.css?V=1.0") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/responsive.css") }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset("js/script.js") }}" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>
  <div class="wrapper bg-dark-white" id="products">

    <header id="sticky-menu" class="header header-2 border-bottom">
      <x-front.navbar/>
    </header>
    <main class="main">
      {{ $slot }}
    </main>

    <x-front.footer/>
  </div>

</body>

</html>
