<nav
  class="bg-white shadow z-10 relative"
  x-data="{
    mobile: false,
    profile: false,
    toggleMobile(){
      this.mobile = !this.mobile
    },
    toggleProfile(){
      this.profile = !this.profile
    }
  }"
>
  <div class="mx-auto max-w-7xl px-2 lg:px-6 lg:px-8">
    <div class="relative flex h-16 justify-between">

      <div class="absolute inset-y-0 left-0 flex items-center lg:hidden">
        <button
          type="button" aria-controls="mobile-menu" aria-expanded="false" @click="toggleMobile()"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500"
        >
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" x-show="!mobile">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" x-cloak x-show="mobile">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex flex-1 items-center justify-center lg:items-stretch lg:justify-start">
        <div class="flex shrink-0 items-center">
          <a href="{{ route('home') }}" class="inline-block">
            <img class="h-9" src="/images/snac.webp" alt="{{ config('app.name') }}">
          </a>
        </div>
      </div>

      <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
        <x-nav.link href="{{ route('home') }}" is-current="{{ Route::is('home') }}">Home</x-nav.link>
        <x-nav.link href="{{ route('services') }}" is-current="{{ Route::is('services') }}">Services</x-nav.link>
        <x-nav.link href="{{ route('reviews') }}" is-current="{{ Route::is('reviews') }}">Reviews</x-nav.link>
        <x-nav.link href="{{ route('contact') }}" is-current="{{ Route::is('contact') }}">Contact Us</x-nav.link>
        <x-nav.link href="{{ route('about') }}" is-current="{{ Route::is('about') }}">About Us</x-nav.link>
      </div>


      {{-- <div class="inset-y-0 right-0 flex items-center pr-2 lg:static lg:inset-auto lg:ml-6 lg:pr-0">

        <button
          type="button"
          class="relative rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
        >
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>

        <div class="relative ml-3">

          <div>
            <button
              type="button" @click="toggleProfile()"
              class="relative flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
              id="user-menu-button"
              aria-expanded="false"
              aria-haspopup="true"
            >
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <div
            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
            x-cloak x-show="profile"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
          >
            <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>

        </div>

      </div> --}}

    </div>
  </div>

  <div class="lg:hidden" x-show="mobile" x-cloak>
    <div class="space-y-1 pb-4 pt-2">
      <x-nav.mobile href="{{ route('home') }}" is-current="{{ Route::is('home') }}">Home</x-nav.mobile>
      <x-nav.mobile href="{{ route('services') }}" is-current="{{ Route::is('services') }}">Services</x-nav.mobile>
      <x-nav.mobile href="{{ route('reviews') }}" is-current="{{ Route::is('reviews') }}">Reviews</x-nav.mobile>
      <x-nav.mobile href="{{ route('contact') }}" is-current="{{ Route::is('contact') }}">Contact Us</x-nav.mobile>
      <x-nav.mobile href="{{ route('about') }}" is-current="{{ Route::is('about') }}">About Us</x-nav.mobile>
    </div>
  </div>

</nav>
