<x-layout>
  @seo(['title' => 'About us | ' . config('app.name')])
  @seo(['description' => 'Learn more about Gravity Builders, your trusted partner in construction and landscaping services. Discover our mission, values, and expertise in building lasting structures.'])
  @seo(['keywords' => 'construction services, landscaping, building services, about Gravity Builders, professional builders, trusted construction company, construction experts, landscaping experts, building lasting structures, construction team, about our company, Gravity Builders team, quality construction'])
  @seo(['image' => config('app.url') . '/images/concrete.webp'])

  <x-navigation />

  <x-about />

  <x-cta />

  <x-footer />

</x-layout>
