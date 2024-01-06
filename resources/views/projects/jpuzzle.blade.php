<x-modal-full-screen id="jpuzzle-content">
  <x-slot name="content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <h2 class="mb-3">Rifattorizzazione e Ottimizzazione di jPuzzle</h2>

          <h4>Introduzione</h4>
          <p>Al mio ingresso in Zerouno, mi sono imbattuto nel loro prodotto di punta jPuzzle: un sistema ERP
            estremamente modulabile ma che celava diverse lacune tecniche dietro a un frontend vecchio stile ma
            funzionale e preciso al pixel.</p>

          <h4>Sfida Iniziale</h4>
          <p>La mia prima esperienza pratica con il sistema mi ha immediatamente messo di fronte a una sfida: tempi di
            compilazione eccessivamente lunghi. Un semplice comando "ng serve" richiedeva oltre cinque minuti per
            compilare l'applicazione, un ritardo notevole che portava ciascun sviluppatore a perdere un enorme quantità
            di tempo per ogni piccola modifica da apportare.</p>

          <h4>Strategie e Soluzioni</h4>
          <div class="accordion mb-2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="jpuzzle-tech-accordion-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#jpuzzle-tech-accordion-collapseOne" aria-expanded="true"
                  aria-controls="jpuzzle-tech-accordion-collapseOne">
                  Nota tecnica
                </button>
              </h2>
              <div id="jpuzzle-tech-accordion-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="jpuzzle-tech-accordion-headingOne">
                <div class="accordion-body">
                  Se sei un tecnico e vuoi leggere un blog a riguardo, puoi trovarlo <a
                    href="{{ route('blog', ['slug' => 'reducing-angular-compilation-time']) }}">qui</a>.
                </div>
              </div>
            </div>
          </div>
          <p>Ho iniziato a esplorare modi per ridurre i tempi di compilazione, concentrandomi su diverse configurazioni
            e ottimizzazioni. Questo processo ha incluso:</p>
          <ul>
            <li><strong>Rimozione dei Passaggi Non Necessari in Modalità Sviluppo:</strong> Esaminando la configurazione
              del compilatore Angular, ho identificato e disabilitato alcune opzioni che rallentavano la compilazione,
              come l'ottimizzazione e la generazione di bundle separati.</li>
            <li><strong>Revisione del File di Configurazione (tsconfig.json):</strong> Ho analizzato e ottimizzato il
              file di configurazione TypeScript per garantire che solo i file necessari fossero inclusi nella
              compilazione.</li>
            <li><strong>Pacchettizzazione e Uso di Nx:</strong> Affrontando la complessità di un'applicazione monolitica
              di grande dimensione, ho adottato l'approccio di suddividerla in pacchetti npm più piccoli e gestibili,
              utilizzando Nx per una gestione efficiente. Questo ha permesso una compilazione incrementale e parallela,
              riducendo drasticamente i tempi di compilazione.</li>
            <li><strong>Applicazione del Principio KISS (Keep It Simple, Stupid):</strong> Un'importante lezione appresa
              è stata la semplificazione del codice. Eliminando l'overengineering e riducendo la quantità di codice,
              sono stato in grado di mantenere l'80% delle funzionalità con solo il 20% dello sforzo iniziale seguendo
              il buon vecchio principio di Pareto.</li>
          </ul>

          <h4>Risultati</h4>
          <p>Grazie a queste strategie, sono riuscito a ridurre il tempo di compilazione da cinque minuti a pochi
            secondi, migliorando notevolmente l'efficienza e la collaborazione nello sviluppo. Questo progetto ha
            dimostrato l'importanza di un approccio flessibile e di un pensiero critico nella risoluzione dei problemi
            tecnici.</p>
        </div>
      </div>
    </div>
  </x-slot>
</x-modal-full-screen>
