<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/mips/mips.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/mips/uc_alu.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <video src="assets/img/portfolio/mips/mips_working.mp4" alt="" class="img-fluid" controls></video>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informazioni progetto</h3>
              <ul>
                <li><strong>Categoria</strong>: Architettura degli elaboratori</li>
                <li><strong>Presso</strong>: Università degli studi di Milano</li>
                <li><strong>Data Progetto</strong>: Giugno 2019</li>
                <li><strong>Specifica</strong>: <a href="assets/img/portfolio/mips/specifica.pdf">Visualizza</a></li>
                <li><strong>Relazione</strong>: <a href="assets/img/portfolio/mips/relazione.pdf">Visualizza</a></li>
                <li><strong>Circuito Logisim</strong>: <a href="assets/img/portfolio/mips/mips.circ">Scarica</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Descrizione</h2>
              <p>
                Il progetto consiste nella realizzazione di un’architettura RISC a 32bit, prendendo spunto
dall’architettura MIPS, con ISA ridotto e un’ALU ad elaborazione di numeri interi.
Le istruzioni vengono inserite nell’Istruction Register tramite l’editor di logisim. Una
volta attivato il clock, le istruzioni vengono eseguite in cascata fino all’ultima disponibile
nell’IR. Al fine di dimostrare il funzionamento viene caricato un programma che inserisce
6 elementi in memoria centrale, da 4 byte ciascuno sotto forma di array, un elemento
k nel registro $a1, scansiona l’array e inserisce nel registro $v0: 1 se è stato trovato
l’elemento k, 0 altrimenti.

              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->