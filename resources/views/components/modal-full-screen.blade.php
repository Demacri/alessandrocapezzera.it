<div id="{{ $id ?? 'default-id' }}" class="portfolio-content-container d-none pt-0">
  <nav class="navbar w-100 position-fixed top-0 ps-5" style="background: var(--bs-white)">
    <!-- Back Button -->
    <button class="btn btn-back portfolio-btn-back"><i class='bx bx-left-arrow-alt'
        style="font-size: 24px;
        vertical-align: top;"></i>
      {{ __('Back to projects') }}</button>
  </nav>
  <section class="portfolio-details pt-5 mt-3">
    {{ $content }}
  </section>
</div>
