<x-layout>
  @seo(['title' => 'FAQ | ' . config('app.name')])
  @seo(['description' => 'Have questions about our construction and landscaping services? Visit our FAQ page for answers to common inquiries about our processes, pricing, and services. Get the information you need to make informed decisions.'])
  @seo(['keywords' => 'construction FAQ, landscaping FAQ, common questions, building services, construction process, pricing questions, landscaping services, FAQ Gravity Builders, construction company FAQs, professional builders FAQs'])
  @seo(['image' => config('app.url') . '/images/gravity-builders.jpg'])

  <x-navigation />

  <x-faq />

  <x-cta />

  <x-footer />

</x-layout>


  