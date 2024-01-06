<div id="{{ $id ?? 'default-id' }}" class="portfolio-content-container d-none pt-0 justify-content-start flex-column">
  <nav class="navbar w-100">
    <!-- Back Button -->
    <button class="btn btn-back portfolio-btn-back"><i class='bx bx-left-arrow-alt'
        style="font-size: 24px;
        vertical-align: top;"></i>
      Torna ai progetti</button>
  </nav>
  <section class="portfolio-details">
    {{ $content }}
  </section>
</div>
