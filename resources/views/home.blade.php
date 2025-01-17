<x-layout>
  @seo([
    'title' => config('app.name') . ' | Trusted General Contractor in Seattle, WA',
    'description' => 'Gravity Builders LLC provides expert general contracting services in Seattle, offering home remodels, additions, and construction repairs with a focus on quality and customer satisfaction.',
    'keywords' => 'general contractor Seattle, home remodeling, home additions, construction repairs, Gravity Builders, remodeling Seattle, contractor services WA',
    'image' => config('app.url') . '/images/builders.jpg'
  ])

  <x-navigation />

  <x-hero />

  <x-services class="bg-gray-100 shadow-inner" />

  <x-gallery />

  <x-reviews class="bg-gray-100 shadow-inner" />

  <x-cta />

  <x-footer />

</x-layout>
