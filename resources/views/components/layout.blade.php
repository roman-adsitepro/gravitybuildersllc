<html>
  <head>
    <x-seo::meta />

    <style>
      [x-cloak] {
          display: none !important;
      }
    </style>

    @vite('resources/css/app.css')
    @filamentStyles
    @livewireStyles
    @stack('styles')

  </head>
  <body>

    {{ $slot }}

    @livewire('notifications')
    @vite('resources/js/app.js')
    @filamentScripts

  </body>
</html>