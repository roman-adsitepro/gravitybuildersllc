<x-layout>
  @seo(['title' => 'Services | ' . config('app.name')])
  @seo(['description' => 'This is the home page of my website.'])

  <x-navigation />

  <x-services class="bg-gray-50 shadow" />

  <x-footer />

</x-layout>
