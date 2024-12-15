<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="This page is home of Portofolio Malana Labilo" />
    <meta name="keywords" content="Portofolio, Web development, service" />
    <meta name="author" content="Malana Labilo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maulo | {{ $title_head }}</title>
    @vite('resources/css/app.css')
    <style>
      input,
      textarea {
        padding: 0 4px;
      }
      a{
        color: #FC440F;
      }
  
      input::placeholder,
      textarea::placeholder {
        font-size: 14px;
        color: #131313;
      }
    </style>
  </head>
  <body class="scrollbar scrollbar-track-mBlack scrollbar-thumb-mWhite scrollbar-corner-mBlack font-inter text-mBlack bg-mWhite">
    
    @include('partials.navbar')

    <main>
      @yield('main_layout')
    </main>
    @include('partials.footer')
    {{-- <script src="script/js/js_bootstrap/bootstrap.js"></script> --}}
  </body>
</html>