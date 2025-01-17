<div class="bg-white">
  <div
    class="lightbox z-10"
    x-cloak
    x-data="{
      lightboxOpen: false,
      imgSrc: ''
    }"
    x-show="lightboxOpen"
    x-transition
    @lightbox.window="lightboxOpen = true; imgSrc = $event.detail;"
  >
    <div class="lightbox-container">
      <img :src="imgSrc" @click.away="lightboxOpen = false" @click="lightboxOpen = false" />
    </div>
  </div>

  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8" x-data>
    <h2 class="sr-only">Projects Gallery</h2>

    <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" @click.prevent="$dispatch('lightbox', '/images/kitchen.webp')" class="group">
        <img src="/images/kitchen.webp" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
        <h3 class="mt-4 text-sm text-gray-700">Kitchen remodeling</h3>
      </a>
      <a href="#" @click.prevent="$dispatch('lightbox', '/images/pavers.webp')" class="group">
        <img src="/images/pavers.webp" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
        <h3 class="mt-4 text-sm text-gray-700">Pavers</h3>
      </a>
      <a href="#" @click.prevent="$dispatch('lightbox', '/images/stairs.webp')" class="group">
        <img src="/images/stairs.webp" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
        <h3 class="mt-4 text-sm text-gray-700">Stairs</h3>
      </a>
      <a href="#" @click.prevent="$dispatch('lightbox', '/images/concrete.webp')" class="group">
        <img src="/images/concrete.webp" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
        <h3 class="mt-4 text-sm text-gray-700">Concrete</h3>
      </a>
    </div>
  </div>
</div>

</div>

<style>
  .gallery {
    display: flex;
    gap: 1em;
  }

  .gallery img {
    cursor: zoom-in;
  }

  .lightbox {
    position: fixed;
    inset: 0;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0, 0, 0, 0.8);
  }

  .lightbox-container {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .lighbox-container * {
    max-width: 100%;
  }
</style>
