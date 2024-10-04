<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'GURU NIWASA LMS ') }}</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <link rel="stylesheet" href="{{asset('themes/default/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('themes/default/css/hover.css')}}">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="{{asset('themes/default/css/custom-css-N.css')}}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
   </head>
   <body>
      @include('web.layouts.headers.header')
      @include('sweetalert::alert')
      @yield('content')
      
      @include('web.layouts.footers.footer')
      @yield('scripts')

      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- DataTables JS -->
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <!-- Bootstrap JS and dependencies -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

      <!-- Custom JS -->
      <!-- Owl Carousel JS CDN -->

      <script src="{{ asset('themes/default/js/owl.carousel.min.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="{{ asset('themes/default/js/admin-custom.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


      
   </body>
   @yield('script')
   <script>
    
    // Set maximum height for cards to align them
    function setMaxHeight(cardClass) {
        let maxHeight = 0;
        let cards = document.querySelectorAll(cardClass);

        // Find the tallest card
        cards.forEach((card) => {
            let height = card.clientHeight;
            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        // Set all cards to the height of the tallest card
        cards.forEach((card) => {
            card.style.height = maxHeight + "px";
        });
    }

    // Run setMaxHeight function after DOM has loaded
    document.addEventListener("DOMContentLoaded", () => {
       
        setMaxHeight(".card-1");
    });


   </script>
</html>
