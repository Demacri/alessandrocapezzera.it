<x-modal-full-screen id="{{ $id ?? 'default-id' }}">
  <x-slot name="content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="portfolio-details-slider swiper justify-content-center">
            <div class="swiper-wrapper">
              {{ $slot }}
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-6" style="margin-bottom: var(--bs-gutter-y);">
          <div class="portfolio-info">
            {{ $info ?? '' }}
          </div>
          <div class="portfolio-description">
            {{ $description ?? '' }}
          </div>
        </div>
      </div>
    </div>
  </x-slot>
</x-modal-full-screen>
