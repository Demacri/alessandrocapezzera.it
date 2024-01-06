<x-modal-content id="gorilla-it-content">

  <x-slot name="slot">
    <div class="swiper-slide">
      <img src="assets/img/portfolio/streetgorilla-it/desktop.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="assets/img/portfolio/streetgorilla-it/shop.png" alt="">
    </div>
    <div class="swiper-slide">
      <video src="assets/img/portfolio/streetgorilla-it/sg1.mp4" alt="" controls></video>
    </div>
    <div class="swiper-slide">
      <img src="assets/img/portfolio/streetgorilla-it/bo_dashboard.jpg" alt="">
    </div>
  </x-slot>

  <x-slot name="info">
    <h3>Informazioni</h3>
    <ul>
      <li><strong>{{ __('Portfolio.Date') }}</strong>: 2018 / 2019 / 2020</li>
      <li><strong>Link</strong>: <a href="https://streetgorilla.it" target="_blank">streetgorilla.it</a></li>
      <li><strong>Note</strong>: Not mantained anymore</li>
    </ul>
  </x-slot>

  <x-slot name="description">
    <h2>{{ __('Description') }}</h2>
    <p>{{ __('StreetGorilla.Description') }}</p>
    </p>
  </x-slot>
</x-modal-content>
