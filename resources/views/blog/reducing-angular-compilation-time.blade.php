@extends('template')
@section('body')
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-3">Ottimizzazione del Frontend in Zerouno</h2>

        <h4>Introduzione</h4>
        <p>Quando sono arrivato in Zerouno, vidi l'enorme effort fatto per avere un frontend che, nonostante fosse molto
          old-style, era estremamente modulabile, componibile e allo stesso tempo rigido nelle personalizzazioni grafiche
          che dovevano rientrare in certi standard di usabilità e coerenza aziendali. Rimasi felicemente shockato nel
          vedere che a prima vista navigandoci non trovai nemmeno un pixel fuori posto, tra me e me mi sembrò di essere
          capitato in qualcosa da cui potevo imparare tanto (spoiler: così fu, ma nell'"hard way")... ricordo
          perfettamente che dopo averlo visto e provato in prima persona, compilai per la prima volta un'applicazione
          frontend. Era Febbraio 2022, avevo un, esteticamente bellissimo, hp i7 di ottava generazione con 16GB di ram e
          ricordo precisamente come dopo aver lanciato "ng serve &lt;applicationName&gt;" ci vollero 5' e qualche secondo
          per
          far comparire il messaggio "** Angular Live Development Server is listening on localhost:4200, open your
          browser on http://localhost:4200/ **".</p>

        <p>[inserisci gif faccia shockata]</p>

        <p>"Sarà solo la prima compilazione, vediamo come si comporta con le build incrementali", aggiungiamo un
          console.log da qualche parte e salviamo, vediamo cosa succede con il live reloading.. ancora minuti di
          compilazione.. shockato mi girai verso il primo collega nei dintorni:</p>

        <ul>
          <li>"ma è normale che a ogni ';' che aggiungo impiega minuti per compilare?"</li>
          <li>"sìsì, è un po' lento"</li>
        </ul>

        <p>[panico]</p>

        <p>Da qui iniziò il mio studio sul trovare incrementalmente modi per ridurre i tempi di compilazione. SPOILER: non
          esiste nessuna magia o flag magico, la verità sta nelle ultime due sezioni.</p>

        <p>Nota: Questo articolo è stato scritto a distanza di più di un anno dall'inizio di questa trasformazione, per
          questo motivo potrebbe contenere delle imprecisioni storiche / tecniche e non contiene dei report statistici
          sulle operazioni descritte di seguito ma ha come obiettivo dare una panoramica dei ragionamenti e del percorso
          fatto che hanno portato a trasformare un applicativo estremamente difficile da manutenere e inutilmente grosso
          in termini di quantità di file e dimensioni in uno con lo stesso set di funzionalità ma ottimizzato sotto
          diversi punti. Commenti sono ben accetti: alessandro.capezzera99@gmail.com</p>

        <h4>Rimozione dei Passaggi Non Necessari nella Compilazione in Modalità Sviluppo</h4>
        <p>Iniziando dai modi che impiegavano meno effort per velocizzare il processo di compilazione ho pensato di vedere
          cosa il compilatore offriva in termini di configurazione per migliorare la situazione. Angular prima di
          consegnare il vostro fantastico codice al browser esegue una serie di step di compilazione e ottimizzazione di
          quest'ultimo. Dal compilare i template contenenti componenti angular in codice javascript, al richiamare webpack
          con i rispettivi plugin per compilare i tuoi file SASS a lanciare il compilatore typescript per ottenere i file
          javascript risultanti, al comprimere il risultato di questi, al compiere ulteriori step di ottimizzazione.
          Vediamo velocemente alcuni flags che si possono definire, prima di arrivare alla fatidica e dura verità:</p>

        <ul>
          <li>aot: Usate AOT finché potete; rispetto agli altri flag citati successivamente è l'unico che vi consiglio di
            tenere abilitato (true). E' il default da angular 9 e porta una serie di benefici e differenze spiegati nella
            documentazione ufficiale di angular. Ma se vi trovate nel mio caso, in prima battuta, potete sacrificarli in
            favore di ore di sviluppo (moltiplicate per N sviluppatori) salvate mentre procedete a risolvere il problema
            alla radice. La differenza principale sta nel fatto che i decoratori angular non vengono compilati a "build
            time" ma solo quando li eseguite nel browser.</li>
          <li>optimization: Inserisce degli step di minificazione degli scripts e dei fogli di stile, uno step di
            tree-shaking. Impostandolo a false aiuterà al raggiungimento dell'obiettivo.</li>
          <li>buildOptimizer: La documentazione di angular non ci da troppe informazioni su cosa questo flag fa.
            Scaricando il repo del pacchetto @angular/angular-cli troviamo di fatto, tra i test riguardanti questo flag,
            che il flag va a ridurre il bundle size finale e quindi effettua sicuramente degli step in più di compilazione
            che disabilitando ci salveranno secondi preziosi durante lo sviluppo.</li>
          <li>vendorChunk: Genera un bundle separato contenente solo i moduli di terze parti. Tenerli separati per il live
            reloading è un toccasana, in quanto quella parte del bundle non dovrà essere compilata andando a modificare il
            nostro sorgente.</li>
        </ul>

        <p>Nonostante queste belle e interessanti accortezze, per esperienza, NON sono queste le cause di una compilazione
          lenta di un'applicazione angular. Il compilatore di angular è in realtà molto rapido e il set up di base fornito
          dal file di configurazione autogenerato lanciando "ng new app" è più che sufficiente. 9 su 10 il problema ricade
          su altri problemi architetturali o di configurazione.</p>

        <h4>tsconfig.json e Conflitti Esistenziali con angular.json</h4>
        <p>Finché arrivate da un progetto pulito angular generato con "ng new ..." potete stare abbastanza certi che il
          file tsconfig.json che vi trovate sia ok per le vostre esigenze. Ma se come me venite lanciati su un progetto
          già esistente di migliaia di file, dare una controllatina non è una brutta idea. In particolare cito un paio di
          flag che ci interessano per vedere se c'è qualcosa che non va per quanto riguarda le perfomance di compilazione:
        </p>

        <ul>
          <li>incremental: in typescript impostando questo flag a true si ottengono delle build incrementali che
            velocizzano le build successive alla prima sia per quanto riguarda il live reloading che per quanto riguarda
            le partenze "a freddo". Angular sembra ignorare questo flag e per quanto riguarda il live reloading ci pensa
            già il compilatore di angular a cercare di ricompilare solo la parte di codice modificata (più le sue
            dipendenze), ma ciò non avviene per le partenze a freddo from disk.</li>
          <li>files, include, exclude: Controllare accuratamente quali file vengono inclusi o esclusi dalla compilazione
            può avere un impatto significativo sul tempo di compilazione. Forse avere { "include": ["**/*.ts"] } non è una
            grande idea. In particolare in un'applicazione angular standard non dovrebbe servirvi specificare quali file
            compilare all'interno del tsconfig.json, quanto più specificare l'entrypoint nella proprietà
            projects.&lt;nomeprogetto&gt;.architect.build.options.main</li>
        </ul>

        <h4>Pacchettizzazione</h4>
        <p>Arriviamo ad uno dei punti salienti del percorso per cui bisogna sporcarsi un po' le mani: pacchettizzare. Uno
          dei più grandi ostacoli che gli sviluppatori incontrano nel lavorare con un'applicazione monolitica, soprattutto
          se l'applicazione cresce fino a raggiungere la dimensione di più di 8000 file con centinaia di righe di codice
          Typescript, è la lentezza del processo di compilazione.</p>

        <h4>Nx in Soccorso</h4>
        <p>Brevemente, Nx è uno strumento estremamente potente che, tra le altre cose, consente agli sviluppatori di
          organizzare il codice in un monorepo, ma con la possibilità di suddividerlo logicamente in librerie condivise.
          Queste librerie possono essere gestite come pacchetti npm separati, consentendo una gestione del codice più
          granulare (<a href="https://nx.dev/getting-started/why-nx">https://nx.dev/getting-started/why-nx</a>).</p>

        <h4>Venendo al Dunque: Come Trasformo un Sorgente Monolitico in Pacchetti?</h4>
        <p>Procedendo per step ho iniziato identificando le parti del codice che possono essere separate logicamente. Per
          mia fortuna il sorgente era già abbastanza ben suddiviso in cartelle con il loro scope (ui, renderers, i18n,
          utils ecc.), il problema è stato poi riuscire a eliminare un intricato "labirinto" di dipendenze l'una con
          l'altra (but this is another story). Utilizzando Nx, ho creato pacchetti npm per ogni libreria. Ogni pacchetto
          ha il proprio set di dipendenze e può essere compilato separatamente. A questo punto per ogni pacchetto creato
          eliminavo il rispettivo codice nel repository in cui le applicazioni erano presenti insieme alle rimanenti
          librerie ancora collegate in modo monolitico e patchavo qua e là alcune rimanenze per far funzionare il tutto.
          Per un certo (lungo) periodo di tempo si ha avuto una situazione ibrida in cui si avevano 2 repository, uno
          organizzato con Nx in pacchetti e un altro con la struttura monolitica che da una parte importava i pacchetti
          realizzati e dall'altra usava il codice non ancora pacchettizzato.</p>

        <h4>Bello... Ma Realmente... Come Funziona?</h4>
        <p>La magia della pacchettizzazione si trova nella compilazione incrementale. Attraverso un sistema di cache
          intelligente che memorizza i risultati della compilazione, invece di ricompilare l'intero monolite ogni volta
          che si apporta una modifica, Nx consente la compilazione solo dei pacchetti che sono stati effettivamente
          modificati o delle parti che dipendono da essi. Se una libreria non è stata modificata, Nx utilizza
          semplicemente la versione in cache. Inoltre, dato dal fatto che abbiamo un albero di dipendenze ben definito, Nx
          consente anche la compilazione parallela dei pacchetti. Questo significa che, ove possibile, più librerie
          possono essere compilate contemporaneamente.</p>

        <h4>Generalizzazione e Tanti Baci (KISS Pattern)</h4>
        <p>Il segreto e mantra che mi piace dire di aver portato all'interno di zerouno è "Semplifica ed elimina". La
          verità e la vera differenza nei tempi di compilazione, di manutenibilità ecc. ecc. sta nel semplificare
          estremamente una struttura overingegnerizzata del sorgente, eliminando decine e decine di file e migliaia di
          righe di codice. Ovviamente non va fatto a caso ma vanno ragionati tutti gli eventuali breaking changes che si
          portano, livelli di astrazioni che si vogliono mantenere e tutto ciò, se sei (s)fortunato come me, senza alcuna
          riga di test per avere un riscontro che quello che si sta facendo non rompa logiche sparse per l'applicazione.
        </p>

        <p>Quindi, dopo aver eliminato qua e là, aver effettuato refactor su refactor di metodi, classi ecc., avere
          un'idea quasi perfetta di tutti gli ingranaggi che muovono l'applicazione e con la benedizione del capo puoi
          procedere a raccogliere un'idea di come applicare il principio di pareto al proprio contesto applicativo
          cercando di ottenere l'80% delle funzionalità esistenti con il 20% dell'effort.</p>

        <p>Commenti sono ben accetti: <a
            href="mailto:alessandro.capezzera99@gmail.com">alessandro.capezzera99@gmail.com</a></p>
      </div>
    </div>
  </div>
@endsection
