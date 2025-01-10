@props([
  'class' => 'bg-gray-50',
  'more' => false
])

<section class="py-16 sm:py-24 {{ $class }}">

    <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base/7 font-semibold text-orange-600">
            Marketing That Works
        </h2>
        <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
            What Our Clients Are Saying
        </p>
        <p class="mt-6 text-lg/8 text-gray-600">
            Success stories from spa, salon, and wellness owners who’ve grown with our free, tailored marketing solutions. See how we’ve helped businesses thrive!
        </p>
      </div>

    <div class="mt-16 mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:grid-cols-2 gap-24">
            @foreach($featured->take(2) as $review)
                <div class="flex flex-col pb-10 sm:pb-16 lg:pb-0 lg:pr-8">
                    <img
                        class="h-24 self-start"
                        src="{{ $review->getFirstMediaUrl('company_logo') }}"
                        alt="{{ $review->name }} {{ $review->title }} company logo"
                    >
                    <figure class="mt-10 flex flex-auto flex-col justify-between">
                        <blockquote class="text-lg/8 text-gray-900">
                            <p>“{{ $review->message }}”</p>
                        </blockquote>
                        <figcaption class="mt-10 flex items-center gap-x-6">
                            <img
                                class="size-14 rounded-full bg-gray-50"
                                src="{{ $review->getFirstMediaUrl('avatar') }}"
                                alt="{{ $review->name }} {{ $review->title }}"
                            >
                            <div class="text-base">
                                <div class="font-semibold text-gray-900">{{ $review->name }}</div>
                                <div class="mt-1 text-gray-500">{{ $review->title }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>

        <div class="xl:mt-24 justify-center flex gap-6">

            <x-filament::button tag="a" size="lg" href="{{ route('contact')}}">
                Get started
            </x-filament::button>

            @if($more)
                <x-filament::link href="{{ route('about') }}" color="gray">
                    Learn more <span aria-hidden="true">→</span>
                </x-filament::link>
            @else
                <x-filament::link href="{{ route('reviews') }}" color="gray">
                    Learn more <span aria-hidden="true">→</span>
                </x-filament::link>
            @endif

        </div>

    </div>

</section>

@if($more && $reviews->count() > 0)
    <section class="py-24 sm:py-32 bg-gray-100 shadow-inner">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                @foreach($reviews as $review)
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-white p-8 text-sm/6 shadow">
                            <blockquote class="text-gray-900">
                                <p>“{{ $review->message }}”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img
                                    class="size-10 rounded-full bg-gray-50"
                                    src="{{ $review->getFirstMediaUrl('avatar') }}"
                                    alt="{{ $review->name }} {{ $review->title }}"
                                >
                                <div>
                                    <div class="font-semibold text-gray-900">{{ $review->name }}</div>
                                    <div class="text-gray-600">{{ $review->title }}</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>

            <div class="mt-24 justify-center flex gap-6">

                <x-filament::button tag="a" size="lg" href="{{ route('contact')}}">
                    Get started
                </x-filament::button>

                <x-filament::link href="{{ route('about') }}" color="gray">
                    Learn more <span aria-hidden="true">→</span>
                </x-filament::link>

            </div>

        </div>
    </section>
@endif
