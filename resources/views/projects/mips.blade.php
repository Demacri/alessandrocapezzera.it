<x-modal-content id="mips-content">

  <x-slot name="slot">
    <div class="swiper-slide">
      <img src="assets/img/portfolio/mips/mips.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="assets/img/portfolio/mips/uc_alu.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <video src="assets/img/portfolio/mips/mips_working.mp4" alt="" class="img-fluid" controls></video>
    </div>
  </x-slot>

  <x-slot name="info">
    <h3>{{ __('Info') }}</h3>
    <ul>
      <li><strong>{{ __('Portfolio.Location') }}</strong>: {{ __('University of Milan') }}</li>
      <li><strong>{{ __('Portfolio.Date') }}</strong>: 06/2019</li>
      <li><strong>{{ __('Specification') }}</strong>: <a href="assets/img/portfolio/mips/specifica.pdf"
          target="_blank">{{ __('Show') }}</a>
      </li>
      <li><strong>{{ __('Report') }}</strong>: <a href="assets/img/portfolio/mips/relazione.pdf"
          target="_blank">{{ __('Show') }}</a>
      </li>
      <li><strong>{{ __('Logisim Circuit') }}</strong>: <a href="assets/img/portfolio/mips/mips.circ"
          target="_blank">Download</a>
      </li>
    </ul>
  </x-slot>

  <x-slot name="description">
    <h2>{{ __('Description') }}</h2>
    <p>{{ __('MIPS.Description') }}</p>
  </x-slot>
</x-modal-content>
