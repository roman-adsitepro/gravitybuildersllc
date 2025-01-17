<div class="relative bg-gray-950 z-0">
  <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
    <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-48 lg:pt-40 xl:col-span-6">
      <div class="mx-auto max-w-lg lg:mx-0">
        <h2 class="mt-24 text-base/7 font-semibold text-lime-600">
          Building the Future, Today
        </h2>
        <h1 class="mt-0 text-pretty text-5xl font-semibold tracking-tight text-white sm:text-7xl">
          Building Dreams
        </h1>
        <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
          We specialize in home remodeling, additions, and construction repairs. Our dedicated team ensures every project is completed on time and within budget.
        </p>
        <div class="mt-10 flex items-center gap-x-6">

          <x-filament::button tag="a" size="lg" href="{{ route('contact') }}">
            Get started
          </x-filament::button>

          <x-filament::link href="{{ route('about') }}">
            Learn more <span aria-hidden="true">→</span>
          </x-filament::link>

        </div>
      </div>
    </div>
    <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
      <img
        class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
        src="/images/builders.webp"
        alt="{{ config('app.name') }}"
      >
    </div>
  </div>
</div>
