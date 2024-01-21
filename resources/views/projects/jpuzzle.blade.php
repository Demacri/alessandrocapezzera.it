<x-modal-full-screen id="jpuzzle-content">
  <x-slot name="content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <h2 class="mb-3">{{ __('jPuzzle.ProjectTitle') }}</h2>

          <h4>{{ __('jPuzzle.Introduction') }}</h4>
          <p>{{ __('jPuzzle.IntroductionText') }}</p>

          <h4>{{ __('jPuzzle.InitialChallenge') }}</h4>
          <p>{{ __('jPuzzle.InitialChallengeText') }}</p>

          <h4>{{ __('jPuzzle.StrategiesAndSolutions') }}</h4>
          <div class="accordion mb-2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="jpuzzle-tech-accordion-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#jpuzzle-tech-accordion-collapseOne" aria-expanded="true"
                  aria-controls="jpuzzle-tech-accordion-collapseOne">
                  {{ __('jPuzzle.TechnicalNote') }}
                </button>
              </h2>
              <div id="jpuzzle-tech-accordion-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="jpuzzle-tech-accordion-headingOne">
                <div class="accordion-body">
                  {{ __('jPuzzle.TechnicalNoteContent') }} <a
                    href="{{ route('blog', ['slug' => 'reducing-angular-compilation-time']) }}">{{ route('blog', ['slug' => 'reducing-angular-compilation-time']) }}</a>.
                </div>
              </div>
            </div>
          </div>
          <p>{{ __('jPuzzle.StrategiesList') }}</p>
          <ul>
            <li><strong>{{ __('jPuzzle.RemovalOfUnnecessarySteps') }}:</strong>
              {{ __('jPuzzle.RemovalOfUnnecessaryStepsDescription') }}</li>
            <li><strong>{{ __('jPuzzle.TsconfigReview') }}:</strong> {{ __('jPuzzle.TsconfigReviewDescription') }}
            </li>
            <li><strong>{{ __('jPuzzle.PackagingWithNx') }}:</strong> {{ __('jPuzzle.PackagingWithNxDescription') }}
            </li>
            <li><strong>{{ __('jPuzzle.ApplicationOfKISS') }}:</strong>
              {{ __('jPuzzle.ApplicationOfKISSDescription') }}</li>
          </ul>

          <h4>{{ __('jPuzzle.Results') }}</h4>
          <p>{{ __('jPuzzle.ResultsText') }}</p>
        </div>
      </div>
    </div>
  </x-slot>
</x-modal-full-screen>
