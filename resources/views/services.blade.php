<x-layout>
  @seo(['title' => 'Our Services | ' . config('app.name')])
  @seo(['description' => 'Explore the range of professional construction and landscaping services offered by Gravity Builders. From residential to commercial projects, we provide quality, reliable solutions to meet all your building and landscaping needs.'])
  @seo(['keywords' => 'construction services, landscaping services, building services, residential construction, commercial construction, landscaping solutions, professional builders, trusted construction company, Gravity Builders services, custom construction projects'])
  @seo(['image' => config('app.url') . '/images/builders.jpg'])

  <x-navigation />

  <x-services class="bg-gray-50 shadow" />

  <x-cta />

  <x-footer />

</x-layout>
