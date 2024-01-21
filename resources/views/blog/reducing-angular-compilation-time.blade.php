@extends('template')
@section('body')
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-3">{{ __('ZerounoOptimization.Title') }}</h2>

        <h4>{{ __('ZerounoOptimization.Introduction') }}</h4>
        <p>{{ __('ZerounoOptimization.IntroText') }}</p>

        <p>[insert gif shocked face]</p>

        <p>{{ __('ZerounoOptimization.CompilationTimeDiscussion') }}</p>

        <ul>
          <li>{{ __('ZerounoOptimization.Dialogue1') }}</li>
          <li>{{ __('ZerounoOptimization.Dialogue2') }}</li>
        </ul>

        <p>[panic]</p>

        <p>{{ __('ZerounoOptimization.StudyOnCompilation') }}</p>

        <p>{{ __('ZerounoOptimization.ArticleNote') }}</p>

        <h4>{{ __('ZerounoOptimization.RemovalOfUnnecessarySteps') }}</h4>
        <p>{{ __('ZerounoOptimization.RemovalDescription') }}</p>

        <ul>
          <li>{{ __('ZerounoOptimization.AotDescription') }}</li>
          <li>{{ __('ZerounoOptimization.OptimizationDescription') }}</li>
          <li>{{ __('ZerounoOptimization.BuildOptimizerDescription') }}</li>
          <li>{{ __('ZerounoOptimization.VendorChunkDescription') }}</li>
        </ul>


        <p>{{ __('ZerounoOptimization.CompilationMisconception') }}</p>

        <h4>{{ __('ZerounoOptimization.TsconfigAndAngularJson') }}</h4>
        <p>{{ __('ZerounoOptimization.TsconfigExplanation') }}</p>

        <ul>
          <li>{{ __('ZerounoOptimization.IncrementalFlag') }}</li>
          <li>{{ __('ZerounoOptimization.FilesIncludeExclude') }}</li>
        </ul>

        <h4>{{ __('ZerounoOptimization.Packaging') }}</h4>
        <p>{{ __('ZerounoOptimization.PackagingDescription') }}</p>

        <h4>{{ __('ZerounoOptimization.NxToTheRescue') }}</h4>
        <p>{{ __('ZerounoOptimization.NxDescription') }} (<a
            href="{{ __('ZerounoOptimization.NxLink') }}">{{ __('ZerounoOptimization.NxLink') }}</a>).</p>


        <h4>{{ __('ZerounoOptimization.HowToTransform') }}</h4>
        <p>{{ __('ZerounoOptimization.TransformDescription') }}</p>

        <h4>{{ __('ZerounoOptimization.HowItWorks') }}</h4>
        <p>{{ __('ZerounoOptimization.HowItWorksDescription') }}</p>


        <h4>{{ __('ZerounoOptimization.KISSPattern') }}</h4>
        <p>{{ __('ZerounoOptimization.KISSDescription') }}</p>

        <p>{{ __('ZerounoOptimization.ParetoPrinciple') }}</p>

        <p>{{ __('ZerounoOptimization.CommentsWelcome') }} <a
            href="mailto:info@alessandrocapezzera.it">info@alessandrocapezzera.it</a></p>
      </div>
    </div>
  </div>
@endsection
