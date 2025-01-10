<div class="relative isolate bg-white">

  @if($submitted)

      <div class="px-6 py-24 sm:py-32 lg:px-8 bg-gray-100">
          <div class="mx-auto max-w-2xl text-center">
              <p class="text-base/7 font-semibold text-green-600">Success</p>
              <h2 class="mt-2 text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Thank you!</h2>
              <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Thank you for your inquiry! We will get<br> back to you as soon as we can.</p>
          </div>
      </div>

  @else

      <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
          <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
              <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">

                  <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2">
                      <svg class="absolute inset-0 size-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                          <defs>
                              <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse">
                                  <path d="M130 200V.5M.5 .5H200" fill="none" />
                              </pattern>
                          </defs>
                          <rect width="100%" height="100%" stroke-width="0" fill="white" />
                          <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                              <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                          </svg>
                          <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
                      </svg>
                  </div>

                  <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Get in touch</h2>

                  <p class="mt-6 text-lg/8 text-gray-600">We’d love to hear from you! Whether you have questions, need assistance, or are ready to start growing your business, feel free to reach out.</p>

                  <dl class="mt-10 space-y-4 text-base/7 text-gray-600">

                      <div class="flex gap-x-4">
                          <dt class="flex-none">
                              <span class="sr-only">Address</span>
                              <x-heroicon-o-building-office-2 class="h-7 w-6 text-gray-400" />
                          </dt>
                          <dd>10000 Cedar Blvd #1000<br>Seattle WA, 98001</dd>
                      </div>

                      <div class="flex gap-x-4">
                          <dt class="flex-none">
                              <span class="sr-only">Telephone</span>
                              <x-heroicon-o-phone class="h-7 w-6 text-gray-400" />
                          </dt>
                          <dd><a class="hover:text-gray-900" href="tel:+12530000000">+1 (253) 000-0000</a></dd>
                      </div>

                      <div class="flex gap-x-4">
                          <dt class="flex-none">
                              <span class="sr-only">Email</span>
                              <x-heroicon-o-envelope class="h-7 w-6 text-gray-400" />
                          </dt>
                          <dd><a class="hover:text-gray-900" href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></dd>
                      </div>

                  </dl>
              </div>
          </div>

          <div class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
              <form class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg" wire:submit.prevent="create">

                  <x-honeypot livewire-model="extraFields" />

                  {{ $this->form }}

                  <div class="mt-8 flex justify-end">
                      <x-filament::button size="lg" type="submit" wire:loading.attr="disabled" wire:target="create">
                          <span wire:loading.remove wire:target="create">Send message</span>
                          <span wire:loading wire:target="create">Sending...</span>
                      </x-filament::button>
                  </div>

              </form>
          </div>

      </div>

  @endif

</div>

