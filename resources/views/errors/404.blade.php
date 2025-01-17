<x-layout>

  <x-navigation />

  <main class="grid place-items-center px-6 py-24 sm:py-32 lg:px-8 bg-gray-100 shadow-inner">
    <div class="text-center">
      <p class="text-base font-semibold text-lime-500">404</p>
      <h1 class="mt-2 text-balance text-3xl sm:text-5xl font-semibold tracking-tight text-gray-900">Page Not Found</h1>
      <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Oops! It looks like the page you're looking for is under construction.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <x-filament::button tag="a" href="{{ route('home') }}"><span aria-hidden="true">&larr;</span> Return to Home</x-filament::button>
        <x-filament::link href="{{ route('contact') }}" color="gray">Contact Support <span aria-hidden="true">&rarr;</span></x-filament::link>
      </div>
    </div>
  </main>

  <x-footer />

</x-layout>

