<x-layout>
  @seo(['title' => 'Contact us | ' . config('app.name')])
  @seo(['description' => 'Have a project in mind? Get in touch with us today! We specialize in concrete work, hardscaping, and yard transformations. Let’s talk about how we can help you create the perfect space.'])
  @seo(['image' => config('app.url') . '/images/gravity-builders.jpg'])

  <x-navigation />

  <livewire:contact-us />

  <x-footer />

</x-layout>
