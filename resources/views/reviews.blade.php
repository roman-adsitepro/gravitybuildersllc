<x-layout>
  @seo(['title' => 'Reviews | ' . config('app.name')])
  @seo(['description' => 'Read client reviews and testimonials about Gravity Builders. Discover why our customers trust us for their construction and landscaping needs, and how we’ve helped them bring their projects to life with quality and professionalism.'])
  @seo(['keywords' => 'Gravity Builders reviews, construction reviews, landscaping reviews, client testimonials, customer feedback, trusted builders, building services reviews, landscaping services reviews, professional builders, construction company reviews'])
  @seo(['image' => config('app.url') . '/images/builders.jpg'])

  <x-navigation />

  <x-reviews more="true" />

  <x-cta />

  <x-footer />

</x-layout>
