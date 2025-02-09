@props([

])

<div class="relative isolate overflow-hidden bg-gray-900">
  <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-base/7 font-semibold text-lime-600">Where Quality Meets Craftsmanship</p>
      <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
        Start Your Project Today
      </h2>
      <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">
        Ready to transform your home? Let us help you bring your vision to life with expert construction services.
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <x-filament::button href="{{ route('contact') }}" tag="a">Get started</x-filament::button>
        <x-filament::link href="{{ route('about') }}">Learn more <span aria-hidden="true">→</span></x-filament::link>
      </div>
    </div>
  </div>
  <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
    <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)" fill-opacity="0.7" />
    <defs>
      <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
        <stop stop-color="#FB9E2B" />
        <stop offset="1" stop-color="#424149" />
      </radialGradient>
    </defs>
  </svg>
</div>
