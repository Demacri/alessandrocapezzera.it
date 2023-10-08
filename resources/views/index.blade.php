<?php
$tz  = new DateTimeZone('Europe/Rome');
$age = DateTime::createFromFormat('d/m/Y', '03/08/1999', $tz)
     ->diff(new DateTime('now', $tz))
     ->y;
//todo: inserire calcolatore preventivo sito web
//todo: inserire video progettazione bomboniere
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alessandro Capezzera - Software Engineer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" type="text/css">

  @vite(['resources/css/app.scss'])

  <!--
    Template credits to:
    =======================================================
    * Template Name: MyResume - v4.3.0
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ========================================================
  -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>{{ __("About") }}</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>{{ __("Resume") }}</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Servizi</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contatti</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  <?php
  $hero = '<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container">
    <h1>Alessandro Capezzera</h1>
    <p class="typed">Technical Lead {{ __(\'at\') }} Zerouno SRL</p>
  </div>
</section>';
  ?>
    <pre style="position: absolute; width:100%; height: 100vh; overflow: hidden"><code class="language-xml" style="height: 100vh;     padding-left: 390px;
      padding-top: 100px">
        {{ ($hero) }}
    </code></pre>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" >
      <h1 id="hero-h1" style="color: white">Alessandro Capezzera</h1>
      <p style="min-height: 39px"><span id="hero-p" class="typed">Technical Lead {{ __("at") }} Zerouno SRL, Freelancer</span></p>
      <div class="social-links" style="opacity: 0">
        {{-- <a href="mailto:info@alessandrocapezzera.it" class="gmail"><i class="bx bxl-gmail"></i></a> --}}
        <a href="https://api.whatsapp.com/send/?phone=393286514397&text=" class="chat" target="_blank"><i class="bx bx-conversation"></i></a>
        <a href="#" class="github"><i class="bx bxl-github"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __("About") }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{asset('assets/img/profile-img.jpg') }}" class="img-fluid about-img" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <p>{{ __("About.Description") }}</p>
          </div>
          {{-- <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Sviluppatore e Consulente Informatico.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Classe:</strong> <span>3 Agosto 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sito web:</strong> <span>alessandrocapezzera.it</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefono:</strong> <span>+39 3286514397</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Età:</strong> <span><?php echo $age; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Titolo:</strong> <span>Laurea in Informatica</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span>info@alessandrocapezzera.it</span></li>
                  <!--<li><i class="bi bi-chevron-right"></i> <strong>Disponibilità:</strong> <span>Libero</span></li>-->
                </ul>
              </div>
            </div>
            <!--<p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>-->
          </div>
        </div> --}}

      </div>
    </section><!-- End About Section -->

    <!-- ======= Curriculum Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Curriculum</h2>
          <p>Filtra per skill: </p>
          <span class="mdc-evolution-chip-set" role="grid">
            <span class="mdc-evolution-chip-set__chips" role="presentation">
                @foreach (['php'] as $skill)
                <span class="mdc-evolution-chip" role="presentation" id="c5">
                    <span class="mdc-evolution-chip__action mdc-evolution-chip__action--primary" role="option" aria-selected="false" tabindex="0">
                    <span class="mdc-evolution-chip__ripple mdc-evolution-chip__ripple--primary"></span>
                    <span class="mdc-evolution-chip__graphic">
                        {{-- <span class="mdc-evolution-chip__icon mdc-evolution-chip__icon--primary material-icons"></span> <!-- optional --> --}}
                        <span class="mdc-evolution-chip__checkmark">
                        <svg class="mdc-evolution-chip__checkmark-svg" viewBox="-2 -3 30 30">
                            <path class="mdc-evolution-chip__checkmark-path"
                                fill="none" stroke="black" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                        </svg>
                        </span>
                    </span>
                    <span class="mdc-evolution-chip__text-label"> {{ $skill }}</span>
                    </span>
                </span>
                @endforeach

              {{-- <span class="mdc-evolution-chip" role="row" id="c1">
                <span class="mdc-evolution-chip__cell mdc-evolution-chip__cell--primary" role="gridcell">
                  <button class="mdc-evolution-chip__action mdc-evolution-chip__action--primary" type="button" tabindex="-1">
                    <span class="mdc-evolution-chip__ripple mdc-evolution-chip__ripple--primary"></span>
                    <span class="mdc-evolution-chip__text-label">Chip two</span>
                  </button>
                </span>
              </span> --}}
            </span>
          </span>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title">Riepilogo</h3>
            <div class="resume-item pb-0">
              <!--<h4>Alessandro Capezzera</h4>-->
              <p><!--<em>Appassionato sin dall'età adolescienziale all'informatica, il mio primo approccio allo sviluppo software  Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em>-->
                <em>Con un'esperienza quasi decennale nello sviluppo software e nel mondo dell'informatica, ho potuto toccare, ogni angolo di questo mondo, a partire dallo sviluppo di siti web, alle applicazioni mobile, alla creazione di piccoli sistemi embedded.</em>
              </p>
              <!--<ul>
                <li>(123) 456-7891</li>
                <li>info@alessandrocapezzera.it</li>
              </ul>-->
            </div>

            <h3 class="resume-title">Formazione</h3>
            <div class="resume-item">
              <h4>Machine Learning</h4>
              <h5>2021 - ad Oggi</h5>
              <p>Attualmente sto seguendo il corso accelerato d'introduzione al Machine Learning di Google.</p>
            </div>
            <div class="resume-item">
              <h4>Laurea in Informatica</h4>
              <h5>2019 - 2021</h5>
              <p><em>Università degli Studi di Milano</em></p>
              <p>Dopo aver ricevuto una borsa di studio per i risultati raggiunti durante il I anno accademico (2018-2019), ho conseguito, nel 2021, una Laurea a pieni voti in Informatica presso l'Università degli Studi di Milano Statale. <!--, con approfondimenti nel campo della <i>Sicurezza e Privatezza</i> e <i>Ricerca Operativa</i> --></p>
            </div>
            <!--<div class="resume-item">
              <h4>Diploma perito informatico</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>-->
            <h3 class="resume-title">L'inizio</h3>
            <div class="resume-item pb-0">
              <p>
                <em>Digitando sulla tastiera sin da quando ero bambino, ho scritto le mie prime righe di codice per lo sviluppo di un videogioco online in 3° media. Nello stesso periodo, all'età di 14 anni, ho realizzato un social network come mio primo progetto personale, funzionante ma mai realmente portato online. Ho avuto poi la possibilità di sviluppare, solo un anno dopo, un applicativo in solitaria presso Encodata S.p.A. distribuito e ancora oggi utilizzato.</em>
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <h3 class="resume-title">Esperienza Professionale</h3>
            <div class="resume-item">
              <h4>Consulente informatico</h4>
              <h5>2018 - Ad Oggi</h5>
              <p><em>Street Gorilla S.r.l.s., Via Alfieri 72 - 20089 Rozzano (MI), Libero professionista</em></p>
              <ul>
                <li>Analisi, sviluppo e manutenzione del sito web</li>
                <li>Analisi, sviluppo e manutenzione della piattaforma e-commerce</li>
                <li>Sviluppo di software gestionale personalizzato</li>
                <li>Digitalizzazione di processi aziendali</li>
                <li>Supporto tecnico</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sviluppatore software</h4>
              <h5>21/09/2017 - 31/12/2018</h5>
              <p><em>Radicis S.r.l., Contratto a progetto</em></p>
              <p>Aggiunta e modifica di funzionalità a piattaforma di e-commerce (Magento) </p>
            </div>
            <div class="resume-item">
              <!-- <h4>Project Manager e Sviluppatore software</h4> -->
              <h5>01/06/2015 – 30/06/2015</h5>
              <p><em>Encodata S.p.A, Via Enrico Fermi 44 - 20090 Assago (MI), Contratto a progetto</em></p>
              <p>Direzione del progetto e sviluppo di una piattaforma per la gestione dell'assistenza e il supporto clienti. Comprensivo di analisi delle esigenze del cliente e successiva installazione finale del prodotto.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Curriculum Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-sistemi-embedded">Sistemi embedded</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="portfolio-details.php?project=streetgorilla.it" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
              <img src={{ asset('assets/img/portfolio/streetgorilla.it/mobile.png') }} class="img-fluid" alt="">
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-3d">
            <div class="portfolio-wrap">
              <a href="portfolio-details.php?project=gorillaears" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
              <img src={{ asset('assets/img/portfolio/gorillaears/1.png') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gorilla ears</h4>
                <p>Stampa 3D</p>
                <div class="portfolio-links">
                  <!--<a href={{ asset('assets/img/portfolio/gorillaears/1.jpg') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>-->
                  <i class="bx bx-link"></i>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sistemi-embedded">
            <div class="portfolio-wrap">
              <a href="portfolio-details.php?project=mips" class="portfolio-details-lightbox" data-glightbox="type: external" title="Dettagli Portfolio">
                <img src={{ asset('assets/img/portfolio/mips/mips.png') }} class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>MIPS</h4>
                  <p>Sistemi embedded</p>
                  <div class="portfolio-links">
                    <!--<a href={{ asset('assets/img/portfolio/mips/mips.png') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="MIPS"><i class="bx bx-plus"></i></a>-->
                    <i class="bx bx-link"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sistemi-embedded">
            <div class="portfolio-wrap">
              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
              <img src={{ asset('assets/img/portfolio/cestinointelligente_st/1.jpg') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ST: Clear the smart City</h4>
                <p>Sistemi embedded</p>
                <div class="portfolio-links">
                  <i class="bx bx-link"></i>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <a href="portfolio-details.php?project=dermatologavenezia.it" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
              <img src={{ asset('assets/img/portfolio/dermatologavenezia.it/mobile.png') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dermatologavenezia.it</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <!--<a href={{ asset('assets/img/portfolio/dermatologavenezia.it/mobile.png') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dermat"><i class="bx bx-plus"></i></a>-->
                  <i class="bx bx-link"></i>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src={{ asset('assets/img/portfolio/portfolio-6.jpg') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href={{ asset('assets/img/portfolio/portfolio-6.jpg') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src={{ asset('assets/img/portfolio/portfolio-7.jpg') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href={{ asset('assets/img/portfolio/portfolio-7.jpg') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src={{ asset('assets/img/portfolio/portfolio-8.jpg') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href={{ asset('assets/img/portfolio/portfolio-8.jpg') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src={{ asset('assets/img/portfolio/portfolio-9.jpg') }} class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href={{ asset('assets/img/portfolio/portfolio-9.jpg') }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servizi</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Siti Web</a></h4>
              <p>Hai bisogno di creare il tuo sito web intuitivo e professionale per te o per la tua azienda? Guarda gli esempi e calcola il tuo preventivo automaticamente. <a href="#">Scopri di più</a></p><!--implementare sistema preventivo automatico basato su numero di pagine statiche/dinamiche/ecommerce/-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-code-alt"></i>
              </div>
              <h4><a href="">Sviluppo Software ad hoc</a></h4>
              <p>Hai un'idea innovativa o necessità particolari da sviluppare? <a href="#contact">Contattami</a></p><!--demo streetgorilla-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Digitalizzazione Processi Aziendali</a></h4>
              <p>Hai un lavoro meccanico da ripetere periodicamente? Copiare, modificare e incollare i dati da una parte all'altra può farlo una macchina, risparmia il tuo tempo prezioso. <a href="#contact">Contattami</a></p><!--inserire diagramma funzionamento riepilogo mensile automatico--> <!--inserire diagramma funzionamento spedizione automatico -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Stampa 3D</a></h4>
              <p>Hai un oggetto di plastica rotto di cui non trovi il ricambio o un modello 3D da stampare? <a href="#contact">Contattami</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Lezioni Private</a></h4>
              <p>Devi preparare un esame o semplicemente vuoi saperne di più sul mondo dell'informatica? <a href="#contact">Contattami</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-devices"></i>
              </div>
              <h4><a href="">App</a></h4>
              <p>Necessiti di un'applicazione per iPhone o smartphones Android? <a href="#contact">Contattami</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cosa dicono di me</h2>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-1.jpg') }} class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-2.jpg') }} class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-3.jpg') }} class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-4.jpg') }} class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Libero professionista</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src={{ asset('assets/img/testimonials/testimonials-5.jpg') }} class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contatti</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@alessandrocapezzera.it</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p><a href="tel:+393286514397">+393286514397</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Oggetto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Messaggio" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Caricamento</div>
                <div class="error-message"></div>
                <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>
              </div>
              <div class="text-center"><button type="submit">Invia messaggio</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!--<h3>Alessandro Capezzera</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>-->
      <!--<div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>-->
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

  <!-- Template Main JS File -->
  @vite(['resources/js/app.js'])

</body>

</html>
