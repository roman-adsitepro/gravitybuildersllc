<x-layout>
  @seo(['title' => 'Contact us | ' . config('app.name')])
  @seo(['description' => 'This is the home page of my website.'])

  <x-navigation />

  <livewire:contact-us />

  <x-footer />

</x-layout>
