<x-modal-content id="gorilla-ears-content">

  <x-slot name="slot">
    <div class="swiper-slide">
      <img src="assets/img/portfolio/gorilla-ears/1.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="assets/img/portfolio/gorilla-ears/2.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="assets/img/portfolio/gorilla-ears/3.jpg" alt="">
    </div>
  </x-slot>

  <x-slot name="info">
    <h3>{{ __('Info') }}</h3>
    <ul>
      <li><strong>{{ __('Portfolio.Date') }}</strong>: 12/2022</li>
      <li><strong>File STL</strong>: <a href="assets/img/portfolio/gorilla-ears/gorilla-ears.stl"
          target="_blank">Download</a></li>
    </ul>
  </x-slot>

  <x-slot name="description">
    <h2>{{ __('Description') }}</h2>
    <p>{{ __('GorillaEars.Description') }}</p>
  </x-slot>
</x-modal-content>
