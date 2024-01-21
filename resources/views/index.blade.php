@extends('template')
@section('body')
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>{{ __('About') }}</span></a>
        </li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
            <span>{{ __('Resume') }}</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
            <span>{{ __('Projects') }}</span></a>
        </li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
            <span>{{ __('Services') }}</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
            <span>{{ __('Contact') }}</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <h1 id="hero-h1">Alessandro Capezzera</h1>
      <p><span id="hero-p" class="typed">Technical Lead {{ __('at') }} Zerouno SRL, Freelancer</span></p>
      <div class="language-selector">

      </div>
      <div class="social-links">
        <a href="mailto:alessandro.capezzera99@gmail.com" class="gmail" aria-label="{{ __('Gmail') }}"><i
            class="bx bxl-gmail"></i></a>
        <a href="https://github.com/Demacri" class="github" aria-label="{{ __('Github') }}"><i
            class="bx bxl-github"></i></a>
        <a href="https://www.codewars.com/users/Demacri" class="codewars" aria-label="{{ __('Codewars') }}"><i
            class="ico-codewars"></i></a>
        <a href="https://www.linkedin.com/in/alessandro-capezzera/" class="linkedin" aria-label="{{ __('Linkedin') }}"><i
            class="bx bxl-linkedin"></i></a>
        <?php
        $locale = session('locale', 'en');
        $flags = [
            'it' => 'it',
            'en' => 'gb',
        ];
        $currentFlag = $flags[$locale];
        $secondaries = array_diff($flags, [$locale => $currentFlag]);
        ?>
        <div id="language-selector-container">
          <div class="language-selector-box">
            <a href="/{{ $locale }}/" class="language-link"><i class="ico-flag-{{ $currentFlag }}"></i></a>
            <i class="bx bxs-down-arrow arrow-lang-selector">
            </i>
          </div>
          @foreach ($secondaries as $secondary => $flag)
            <a href="/{{ $secondary }}/" class="language-link"><i class="ico-flag-{{ $flag }}"></i></a>
          @endforeach
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('Projects') }}</h2>
          <p>{{ __('Portfolio.Description') }}</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              {{-- <li data-filter=".filter-app">App</li> --}}
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-embedded-system">{{ __('Embedded Systems') }}</li>
              <li data-filter=".filter-other">{{ __('Other') }}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="#coreve-content" class="portfolio-details-lightbox" data-width="100vw" data-height="100vh">
                <img src={{ asset('assets/img/portfolio/coreve/coreve-home-mobile.png') }} class="img-fluid"
                  alt="">
                <div class="portfolio-info">
                  <h4>Gestione bandi CoReVe</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="#jpuzzle-content" class="portfolio-details-lightbox" data-width="100vw" data-height="100vh">
                <img src={{ asset('assets/img/portfolio/jpuzzle/screenshot_mobile.png') }} class="img-fluid"
                  alt="">
                <div class="portfolio-info">
                  <h4>Rifattorizzazione jPuzzle</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-embedded-system">
            <div class="portfolio-wrap">
              <a href="#mips-content" class="portfolio-details-lightbox" data-width="100vw" data-height="100vh">
                <img src={{ asset('assets/img/portfolio/mips/mips.png') }} class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>MIPS</h4>
                  <p>{{ __('Embedded Systems') }}</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="#gorilla-it-content" class="portfolio-details-lightbox" data-width="100vw" data-height="100vh">
                <img src={{ asset('assets/img/portfolio/streetgorilla-it/mobile.png') }} class="img-fluid"
                  alt="">
                <div class="portfolio-info">
                  <h4>Streetgorilla.it</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>




          <div class="col-lg-4 col-md-6 portfolio-item filter-embedded-system">
            <div class="portfolio-wrap">
              <a href="#clear-the-smart-city-content" class="portfolio-details-lightbox" data-width="100vw"
                data-height="100vh">
                <img src={{ asset('assets/img/portfolio/clear-the-smart-city/1.jpg') }} class="img-fluid"
                  alt="">
                <div class="portfolio-info">
                  <h4>ST: Clear the smart City</h4>
                  <p>{{ __('Embedded Systems') }}</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="#dermatologavenezia-it-content" class="portfolio-details-lightbox" data-width="100vw"
                data-height="100vh">
                <img src={{ asset('assets/img/portfolio/dermatologavenezia-it/mobile.png') }} class="img-fluid"
                  alt="">
                <div class="portfolio-info">
                  <h4>Dermatologavenezia.it</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-other">
            <div class="portfolio-wrap">
              <a href="#gorilla-ears-content" class="portfolio-details-lightbox" data-width="100vw"
                data-height="100vh">
                <img src={{ asset('assets/img/portfolio/gorilla-ears/1.png') }} class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gorilla ears</h4>
                  <p>Stampa 3D</p>
                  <div class="portfolio-links">
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('About') }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="profile-img">
              <img src="{{ asset('assets/img/profile-img.jpg') }}" class="img-fluid about-img" alt="">
            </div>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <p>{{ __('About.Description') }}</p>
          </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Curriculum Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Curriculum</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title">{{ __('Summary') }}</h3>
            <div class="resume-item pb-0">
              <p>
                <em>{{ __('Summary.Description') }}</em>

              </p>
            </div>

            <h3 class="resume-title">{{ __('Professional Experience') }}</h3>
            <div class="resume-item">
              <h4>Technical Lead</h4>
              <h5>02/2022 - {{ __('Resume.Today') }}</h5>
              <p><em>Zerouno srl, Via Moncenisio 75 - 20089 Rozzano (MI), {{ __('Resume.Freelancer') }}</em></p>
              <p>{{ __('Resume.Zerouno') }}</p>
            </div>
            <div class="resume-item">
              <h4>{{ __('Professor') }}</h4>
              <h5>01/10/2023 - 08/01/2024</h5>
              <p><em>IIS Italo Calvino, Via Guido Rossa 33 - 20089 Rozzano (MI)</em></p>
            </div>
            <div class="resume-item">
              <h4>{{ __('Computer Consultant') }}</h4>
              <h5>2018 - 12/2022</h5>
              <p><em>Street Gorilla S.r.l.s., Via Alfieri 72 - 20089 Rozzano (MI), {{ __('Resume.Freelancer') }}</em>
              </p>
              <p>{{ __('Resume.StreetGorilla') }}</p>
            </div>
            <div class="resume-item">
              <h4>{{ __('Web developer') }}</h4>
              <h5>21/09/2017 - 31/12/2018</h5>
              <p><em>Radicis S.r.l., {{ __('Project based contract') }}</em></p>
              <p>{{ __('Resume.Radicis') }}</p>
            </div>
            <div class="resume-item">
              <h4>{{ __('Web developer') }}</h4>
              <h5>01/06/2015 – 30/06/2015</h5>
              <p><em>Encodata S.p.A, Via Enrico Fermi 44 - 20090 Assago (MI), {{ __('Project based contract') }}</em>
              </p>
              <p>{{ __('Resume.Encodata') }}</p>
            </div>
          </div>
          <h3 class="resume-title">{{ __('Education') }}</h3>
          <div class="resume-item">
            <h4>Machine Learning Crash Course By Google</h4>
            <h5>01/2021 - 02/2021</h5>
            <p>{{ __('Resume.ML') }}</p>
          </div>
          <div class="resume-item">
            <h4>{{ __('Resume.Degree') }}</h4>
            <h5>2019 - 2021</h5>
            <p><em>{{ __('University of Milan') }}</em></p>
            <p>{{ __('Resume.Degree.Description') }}</p>
          </div>
          <div class="col-lg-12">
            <h3 class="resume-title">{{ __('The beginning') }}</h3>
            <div class="resume-item pb-0">
              <p>
                <em>{{ __('Resume.Beginning') }}</em>
              </p>
            </div>
          </div>

        </div>
    </section><!-- End Curriculum Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('Services') }}</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                  </path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="#contact">{{ __('Websites') }}</a></h4>
              <p>{{ __('Services.Websites.Description') }}
                {{-- Guarda gliesempi e calcola il tuo preventivo automaticamente.  --}}
                <!--TODO: implementare sistema preventivo automatico basato su numero di pagine statiche/dinamiche/ecommerce/-->
                <br><a href="#contact">{{ __('Contact me') }}</a>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                  </path>
                </svg>
                <i class="bx bx-code-alt"></i>
              </div>
              <h4><a href="#contact">{{ __('Services.Development') }}</a></h4>
              <p>{{ __('Services.Development.Description') }} <br><a href="#contact">{{ __('Contact me') }}</a>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                  </path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="#contact">{{ __('Automation') }}</a></h4>
              <p>{{ __('Services.Digitalization.Description') }}<br><a href="#contact">{{ __('Contact me') }}</a>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                  </path>
                </svg>
                <i class="bx bx-building"></i>
              </div>
              <h4><a href="#contact">{{ __('Consultancy') }}</a></h4>
              <p>{{ __('Services.Consultancy.Description') }}<br><a href="#contact">{{ __('Contact me') }}</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                  </path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="#contact">{{ __('Private Lessons') }}</a></h4>
              <p>{{ __('Services.Lessons.Description') }} <br><a href="#contact">{{ __('Contact me') }}</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                  </path>
                </svg>
                <i class="bx bx-devices"></i>
              </div>
              <h4><a href="#contact">{{ __('Products and Applications') }}</a></h4>
              <p> {{ __('Services.Products.Description') }}<br><a href="#contact">{{ __('Contact me') }}</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cosa dicono di me</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-1.jpg') }} class="testimonial-img"
                  alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-2.jpg') }} class="testimonial-img"
                  alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-3.jpg') }} class="testimonial-img"
                  alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-4.jpg') }} class="testimonial-img"
                  alt="">
                <h3>Matt Brandon</h3>
                <h4>Libero professionista</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-5.jpg') }} class="testimonial-img"
                  alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('Contact') }}</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>{{ __('Location') }}:</h4>
                <p>{{ __('Currently in Italy') }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ env('MAIL_FROM_ADDRESS') }}</p>
              </div>

              {{-- <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p><a href="tel:+">+</a></p>
              </div> --}}

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact.send') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name"
                    placeholder="{{ __('Name') }}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                    required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject"
                  placeholder="{{ __('Subject') }}" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="{{ __('Message') }}" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">{{ __('Loading') }}</div>
                <div class="error-message">{{ __('Contact.Error') }}</div>
                <div class="sent-message">{{ __('Sent Successfully') }}</div>
              </div>
              <div class="text-center"><button type="submit">{{ __('Send') }}</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Alessandro Capezzera</span></strong> <?php echo date('Y'); ?>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

  <!-- Template Main JS File -->
  @include('projects.coreve')
  @include('projects.jpuzzle')
  @include('projects.streetgorilla-it')
  @include('projects.mips')
  @include('projects.clear-the-smart-city')
  @include('projects.dermatologavenezia-it')
  @include('projects.gorilla-ears')
  {{-- @include('programmable-pets-feeder')
  @include('n8n-xstate') --}}
@endsection
