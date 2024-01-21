<x-modal-full-screen id="coreve-content">
  <x-slot name="content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12">
          <h2 class="mb-3">{{ __('Coreve.ProjectTitle') }}</h2>
        </div>
        <div class="col-xl-3 d-xl-block d-none">
          <img src="assets/img/portfolio/coreve/coreve-home-mobile.png" alt="" class="img-fluid">
        </div>
        <div class="col-12 d-xl-none">
          <img src="assets/img/portfolio/coreve/bandi.png" alt="" class="img-fluid">
        </div>

        <div class="col-xl-9 col-12">
          <h4>{{ __('Coreve.ProjectDetails') }}</h4>
          <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><strong>{{ __('Coreve.Date') }}:</strong> 04/2023</li>
            <li class="list-group-item"><strong>{{ __('Coreve.ProjectDuration') }}:</strong> 3 {{ __('weeks') }}</li>
            <li class="list-group-item"><strong>{{ __('Coreve.TechnologiesUsed') }}:</strong> NodeJS /w Strapi, Angular
              /w PrimeNG, Brevo, OIDC Authentication /w Keycloak, Cloudflare, Docker</li>
            <li class="list-group-item"><strong>{{ __('Coreve.Team') }}:</strong> 1 Product Owner, 2 Sviluppatori</li>
            <li class="list-group-item"><strong>{{ __('Coreve.MyRole') }}:</strong> Software architect, Code Reviewer,
              {{ __('Coreve.TechMentor') }}</li>
          </ul>
          <img src="assets/img/portfolio/coreve/identificazione.png" alt="" class="img-fluid d-xl-none mb-4">
          <h4>{{ __('Coreve.ProjectDescription') }}</h4>
          <p>{{ __('Coreve.ProjectDescriptionText') }}</p>
        </div>

        <div class="col-12 d-xl-none">
          <img src="assets/img/portfolio/coreve/allegatoA.png" alt="" class="img-fluid">
        </div>

        <div class="col-12">
          <h4>{{ __('Coreve.FeaturesAndResults') }}</h4>
          <ul>
            <li><strong>{{ __('Coreve.Digitalization') }}:</strong> {{ __('Coreve.DigitalizationText') }}</li>
            <li><strong>{{ __('Coreve.SecurityAndLegality') }}:</strong> {{ __('Coreve.SecurityAndLegalityText') }}
            </li>
            <li><strong>{{ __('Coreve.TechnologicalInnovation') }}:</strong>
              {{ __('Coreve.TechnologicalInnovationText') }}</li>
          </ul>
        </div>
        <div class="col-12">
          <div class="portfolio-details-slider swiper justify-content-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <video controls class="img-fluid">
                  <source src="assets/img/portfolio/coreve/backoffice.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/coreve/allegatoA.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-12">
          <h4>{{ __('Coreve.MyContribution') }}</h4>
          <p>{{ __('Coreve.MyContributionText') }}</p>
        </div>
        <div class="col-12">
          <h4>{{ __('Coreve.PriorityManagement') }}</h4>
          <p>{{ __('Coreve.PriorityManagementText') }}</p>
        </div>
      </div>
    </div>

  </x-slot>
</x-modal-full-screen>
