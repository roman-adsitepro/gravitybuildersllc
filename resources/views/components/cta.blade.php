@props([

])

<div class="relative isolate overflow-hidden bg-gray-900">
  <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
        Ready to grow your business?
      </h2>
      <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">
        Let us handle the marketing while you focus on what you do best—delivering exceptional health and beauty services.
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a
          href="{{ route('contact') }}"
          class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
        >Get started</a>
        <a href="{{ route('about') }}" class="text-sm/6 font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
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
