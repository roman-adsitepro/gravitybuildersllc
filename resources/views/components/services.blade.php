@props([
  'class' => 'bg-white'
])

<div class="overflow-hidden py-24 sm:py-32 {{ $class }}">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-orange-600">Marketing That Works</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
                Our Services: Tailored for Health & Beauty Businesses
            </p>
            <p class="mt-6 text-lg/8 text-gray-600">
                At Image Marketing, we offer specialized marketing solutions designed to drive growth for spas, salons, wellness centers, and other service-based businesses in the health and beauty industry.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-16 gap-y-16 lg:max-w-none lg:grid-cols-3">

                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                        <x-heroicon-s-currency-dollar class="size-5 flex-none text-orange-600" />
                        Free Marketing Campaigns
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                            We create fully customized marketing campaigns for your business at no upfront cost. From social media ads to local SEO strategies, our campaigns are tailored to attract your ideal clients and showcase your unique services.
                        </p>
                    </dd>
                </div>

                <div class="flex flex-col">

                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                        <x-heroicon-s-user-group class="size-5 flex-none text-orange-600" />
                        Client Acquisition
                    </dt>

                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                            Our targeted strategies focus on bringing in new clients while increasing loyalty among your existing customer base. Using data-driven techniques, we help convert leads into long-term clients.
                        </p>
                    </dd>

                </div>

                <div class="flex flex-col">

                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                        <x-heroicon-s-check-badge class="size-5 flex-none text-orange-600" />
                        Seamless Onboarding
                    </dt>

                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                            Getting started with Image Marketing is easy. Book a free consultation, and our team will handle everything from strategy development to implementation, ensuring a smooth and stress-free experience.
                        </p>
                    </dd>

                </div>

            </dl>
        </div>

    </div>
</div>
