<x-layout>
  @seo(['title' => 'Reviews | ' . config('app.name')])
  @seo(['description' => 'This is the home page of my website.'])

  <x-navigation />

  <x-reviews more="true" />

  <x-cta />

  <x-footer />

</x-layout>
