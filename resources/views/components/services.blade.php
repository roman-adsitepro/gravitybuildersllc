@props([
  'class' => 'bg-white'
])

<div class="overflow-hidden py-24 sm:py-32 {{ $class }}">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-orange-600">Marketing That Works</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
              Our Expertise, Your Vision
            </p>
            <p class="mt-6 text-lg/8 text-gray-600">
              Gravity Builders LLC offers high-quality home additions, stylish remodels, and expert construction repairs to enhance and protect your home. We focus on delivering lasting, tailored solutions for every project.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-16 gap-y-16 lg:max-w-none lg:grid-cols-3">

                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-2xl font-semibold text-gray-900">
                        <x-heroicon-o-currency-dollar class="size-7 flex-none text-orange-600" />
                        Home Additions
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                          Expand your living space with seamless, high-quality home additions.
                        </p>
                    </dd>
                </div>

                <div class="flex flex-col">

                    <dt class="flex items-center gap-x-3 text-2xl font-semibold text-gray-900">
                        <x-heroicon-o-user-group class="size-7 flex-none text-orange-600" />
                        Home Remodels
                    </dt>

                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                          Upgrade your home with modern, functional remodels that match your vision.
                        </p>
                    </dd>

                </div>

                <div class="flex flex-col">

                    <dt class="flex items-center gap-x-3 text-2xl font-semibold text-gray-900">
                        <x-heroicon-o-check-badge class="size-5 flex-none text-orange-600" />
                        Construction Repairs
                    </dt>

                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                        <p class="flex-auto">
                          Strengthen your home’s foundation and structure with expert repairs.
                        </p>
                    </dd>

                </div>

            </dl>
        </div>

    </div>
</div>
