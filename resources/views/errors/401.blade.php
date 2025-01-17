<x-layout>

  <x-navigation />

  <main class=" place-items-center px-6 py-24 sm:py-32 lg:px-8 bg-gray-50 shadow-inner">
    <div class="text-center">
      <p class="text-base font-semibold text-lime-500">
        402
      </p>
      <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
        Unauthorized
      </h1>
      <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
        You need to log in or provide proper credentials to access this page.
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <x-filament::button tag="a" href="{{ route('filament.admin.auth.login') }}">Log In</x-filament::button>
        <x-filament::link href="{{ route('home') }}" color="gray"><span aria-hidden="true">&larr;</span> Return to Home</x-filament::link>
        <x-filament::link href="{{ route('contact') }}" color="gray">Contact support <span aria-hidden="true">&rarr;</span></x-filament::link>
      </div>
    </div>
  </main>

  <x-footer />

</x-layout>
