<html>
  <head>
    <x-seo::meta />

    <style>
      [x-cloak] {
          display: none !important;
      }
    </style>

    @livewire('notifications')
    @vite('resources/css/app.css')
    @filamentStyles
    @livewireStyles
    @stack('styles')

  </head>
  <body>

    {{ $slot }}

  </body>
</html>