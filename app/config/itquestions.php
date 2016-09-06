<?php
return array(
    'screeners' => array(
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'Partiamo dall\'inizio. Un paio di domande su di lei e la sua azienda.',
                'questions' => array(
                    's1'=>array(
                        'type'=>'icon',
                        'question'=>'Quale di queste risposte descrive al meglio il suo ruolo all\'interno dell\'azienda?
',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'ico-it',
                                'label'=>'Gestisco o lavoro nel reparto IT della società',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-o',
                                'label'=>'Il mio lavoro quotidiano è esterno rispetto al settore IT, ma ha un impatto sulle politiche IT',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Un\'altra domanda prima di iniziare. ',
                'questions' => array(
                    's2'=>array(
                        'type'=>'icon',
                        'question'=>'Quanto è grande la società per cui lavora o che gestisce?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'ico-few',
                                'label'=>'0-9 dipendenti',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-more',
                                'label'=>'10-99 dipendenti',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-most',
                                'label'=>'Più di 100 dipendenti',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'business' => array(
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Efficienza aziendale e capacità IT',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'Quanto è importante il settore IT nell\'ambito degli obiettivi aziendali, in particolare ai fini del miglioramento delle performance aziendali e della riduzione dei costi operativi?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Di importanza critica',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Contributo importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Contributo modesto',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Di scarsa o nessuna importanza',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il 56% delle PMI in Europa occidentale considera l\'IT come un contributo importante agli obiettivi aziendali. La riduzione dei costi è stata la priorità aziendale principale per le PMI in Europa occidentale nel 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Efficienza aziendale e capacità IT',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'button',
                        'question'=>'Quanto è importante per lei il reparto IT ai fini della conformità legale e normativa?',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Di importanza critica',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Contributo importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Contributo modesto',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Di scarsa o nessuna importanza',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Nel sondaggio IDC del 2014, le PMI in Europa occidentale hanno classificato la conformità come la terza priorità aziendale in termini di criticità nel 2014, e il ruolo dell\'IT è vitale',
                    'image'=>'img/techfit_icons_Q-A2.png'
                )
            ),
            'page3' => array(
                'title' => 'Efficienza aziendale e capacità IT',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'Ha sostituito, o pianifica di sostituire, i documenti cartacei con gli equivalenti digitali?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'I flussi di lavoro digitalizzati riducono i costi e offrono recupero e gestione dello storage di qualità superiore. I sondaggi di IDC presso le PMI in Europa occidentale dimostrano che solo un quarto del 26% delle PMI non intende sostituire i sistemi cartacei con soluzioni software per i flussi di lavoro documentali. Le restanti aziende o sono già passate alla gestione documentale (>40% nel caso dei documenti contabili) o pianifica di farlo nell\'immediato futuro. ',
                    'image'=>'img/techfit_icons_Q-A3.png'
                )
            ),
            'page4' => array(
                'title' => 'Efficienza aziendale e capacità IT',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'Utilizza una soluzione di gestione delle spese di telecomunicazione wireless per tenere traccia di costi e utilizzo dei dispositivi mobili dell\'azienda?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'I sondaggi di IDC in Europa occidentale indicano che la percentuale di società che utilizza dispositivi mobili va dal 78% in ambito sanitario al quasi il 95% nell\'ambito di media/telecomunicazioni, in cui a circa il 24% dei dipendenti viene fornito un dispositivo. In media l\'adozione si attesta all\'86%, ma il costo è fortemente dipendente dall\'utilizzo. È di importanza critica controllare i costi di questi dispositivi. ',
                    'image'=>'img/techfit_icons_Q-A4.png'
                )
            ),
            'page5' => array(
                'title' => 'Efficienza aziendale e capacità IT',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'button',
                        'question'=>' Tiene traccia o controlla chi utilizza le stampanti negli uffici e quando le utilizza?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il controllo di chi è autorizzato a stampare e dove può farlo offre un notevole risparmio sui costi, oltre ai vantaggi aggiuntivi di miglioramento di privacy e sicurezza, per ridurre i rischi legali e aziendali. Studi di IDC dimostrano che il 26% delle PMI in Europa occidentale dispone di procedure per l\'utilizzo dei dispositivi di stampa e di relativa reportistica, mentre il 24% ha implementato soluzioni per la protezione dei dispositivi di stampa con identificazione. ',
                    'image'=>'img/techfit_icons_Q-A5.png'
                )
            )
        )
    ),
    'security' => array(
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sicurezza',
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'Intende aggiornare il suo attuale livello di sicurezza IT per adeguarlo alle minacce in via di cambiamento o emergenti?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Il nostro livello di sicurezza IT è in fase di valutazione',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non è in corso un aggiornamento ',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Nell\'ultimo sondaggio di IDC sugli utenti IT in Europa occidentale, il 93% dei professionisti addetti all\'IT e alla sicurezza dichiara che migliorare la sicurezza di dipendenti e dispositivi esistenti è della massima priorità. Tra le PMI, la spesa su ogni aspetto della sicurezza IT ha la priorità, con particolare focus sulle soluzioni in rete ed endpoint. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'Sicurezza',
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'Ha verificato se tutti i dispositivi mobili usati nell\'azienda - inclusi computer portatili e chiavette di memoria - prevedano la crittografia dei dati?',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'Sì, tutti',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sì, alcuni',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La prevenzione della perdita dei dati è un problema serio e ricorrente per quasi tutte le organizzazioni, piccole o grandi. La protezione dei dati sensibili è il secondo obiettivo aziendale in termini di priorità per le PMI in Europa occidentale, se si considera il punteggio medio, e terzo se si considera la quota di intervistati che lo considerano importante o molto importante (il 60% di tutti gli intervistati). La perdita di dispositivi contenenti dati personali non crittografati può essere considerata un\'infrazione della legge UE sulla protezione dei dati, una violazione soggetta a multe.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'Sicurezza',
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'È in grado di limitare la stampa agli orari in cui il proprietario del documento è presente?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'Sì, disponiamo di questa capacità ',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Limitare l\'accesso alle stampe a quando il proprietario del documento è presente riduce la perdita di dati critici in seguito a lettura/copia dei documenti da parte di persone non autorizzate. La perdita di dati, la copia e la lettura non autorizzate di documenti di importanza critica rappresenta un rischio aziendale serio e apre la porta ad azioni legali. Circa il 30% delle PMI europee implementa oggi soluzioni di questo genere.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'Sicurezza',
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'È in grado di disattivare o cancellare i dati sui dispositivi mobili in modalità remota in caso di loro perdita/furto/abuso, ecc.?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'Sì, qualsiasi dispositivo utilizzato per gli scopi aziendali (inclusi i dispositivi BYOD)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Solo i dispositivi di proprietà dell\'azienda',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La prevenzione della perdita dei dati è di importanza critica per la reputazione aziendale e la conformità legale (in particolare per i casi in cui le informazioni includono dati personali di dipendenti o clienti). Il 62% delle società al di sotto dei 1000 dipendenti ha adottato o adotterà soluzioni di Mobile Device Management nei prossimi 24 mesi.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            )
        )
    ),
    'cloud' => array(
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'checkbox',
                        'question'=>'Per quale di queste attività si avvale di servizi cloud: <span class="instruct">SELEZIONARE TUTTE LE OPZIONI PERTINENTI</span>',
                        'name'=>'c1',
                        'script'=>'
                            $(\'#4-c1\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-c1\').iCheck(\'uncheck\');
                                $(\'#1-c1\').iCheck(\'uncheck\');
                                $(\'#2-c1\').iCheck(\'uncheck\');
                                $(\'#3-c1\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-c1\'),$(\'#1-c1\'),$(\'#2-c1\'),$(\'#3-c1\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#4-c1\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Attività quotidiane come l\'avviamento nell\'ambito delle risorse umane, moduli orari e spese. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Comunicazione e collaborazione',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hosting dei sistemi di vendita online e marketing',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sistemi di sicurezza IT ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non so',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'I servizi cloud offrono flessibilità, scalabilità, lavoro da remoto semplificato, piani di pagamento a consumo, ecc.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'Utilizza servizi di storage cloud con sincronizzazione e condivisione?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Sì, tali sistemi sono implementati',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'In corso di valutazione',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Lo storage su cloud facilita la collaborazione e il lavoro sul campo e può prevedere costi più contenuti. Attualmente è molto richiesto da parte degli utenti finali e la mancanza di una soluzione aziendale può causare l\'adozione di soluzioni consumer che vanno a incrementare il fenomeno di "shadow IT", con conseguente aumento dei rischi aziendali dovuti all\'assenza di controllo. L\'ultimo sondaggio condotto da IDC in Europa occidentale su questo argomento ha dimostrato che circa il 20% delle organizzazioni ha implementato una soluzione di condivisione basata su cloud - principalmente per un ristretto gruppo di utenti - mentre il 37% delle organizzazioni pianifica o valuta la possibilità di implementare una soluzione di questo genere.',
                    'image'=>'img/techfit_icons_Q-C2.png'
                )
            ),
            'page3' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'Sa dove sono salvati i dati su cloud ed è in grado di controllare tale posizione?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'I dati sono conservati in un luogo sotto il nostro controllo',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Abbiamo scelto i fornitori in base alla località',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Siamo a conoscenza di dove siano memorizzati i dati ma non possiamo modificare tale località',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non siamo a conoscenza della località in cui sono salvati i nostri dati',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non utilizziamo sistemi cloud per il problema connesso alla posizione dello storage',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non utilizziamo sistemi cloud per altri motivi',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Sono in corso numerose controversie sul controllo degli accessi ai dati basati su cloud, in particolare i dati personali, a causa di regimi normativi in conflitto e di leggi in evoluzione (in particolare la battaglia tra Microsoft e i giudici statunitensi in merito ai dati che si trovano a Dublino, e il riesame da parte dell\'UE delle disposizioni del cosiddetto accordo Safe Harbor con gli Stati Uniti).',
                    'image'=>'img/techfit_icons_Q-C3.png'
                )
            ),
            'page4' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'I suoi utenti sono in grado di stampare utilizzando il cloud?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il 39% delle società europee oggi consente la stampa tramite cloud. Mentre i rischi aziendali possono aumentare in caso di implementazione errata, i vantaggi potenziali includono migliore produttività, flessibilità ed esigenze ridotte di infrastrutture locali (meno PC da installare)',
                    'image'=>'img/techfit_icons_Q-C4.png'
                )
            ),
            'page5' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'L\'utilizzo del cloud ha modificato la sua strategia per la sicurezza IT?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'In corso di riesame',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non riteniamo di dover apportare modifiche',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il 70% delle organizzazioni intervistate ha dichiarato che il miglioramento della sicurezza IT grazie a cloud/SaaS è stata una parte molto importante o determinante della strategia per i successivi 12 mesi.',
                    'image'=>'img/techfit_icons_Q-C5.png'
                )
            )
        )
    ),
    'mobility' => array(
        'colour' => 'green',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Mobilità',
                'questions' => array(
                    'm1'=>array(
                        'type'=>'button',
                        'question'=>'Lascia che i dipendenti utilizzino i propri dispositivi di lavoro ("BYOD")?',
                        'name'=>'m1',
                        'options'=>array(
                            array(
                                'label'=>'Sì, offriamo accesso completo ai sistemi aziendali',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sì, ma limitiamo l\'uso a elementi di base',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il 25% ha lanciato almeno un\'app mobile, e il 5% ne ha lanciata più di una. Una società su quattro pianifica di implementare app mobili nei tablet; oltre il 40% pianifica di utilizzare strumenti HTLM5 per implementare applicazioni cross-platform',
                    'image'=>'img/techfit_icons_Q-D1.png'
                )
            ),
            'page2' => array(
                'title' => 'Mobilità',
                'questions' => array(
                    'm2'=>array(
                        'type'=>'button',
                        'question'=>'Crea app per i clienti della sua azienda per l\'accesso a prodotti e servizi?',
                        'name'=>'m2',
                        'options'=>array(
                            array(
                                'label'=>'Abbiamo un\'app per i clienti',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Il sito Web della nostra società è utilizzabile dai dispositivi mobili',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nessun supporto speciale per i dispositivi mobili',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il 25% ha lanciato almeno un\'app mobile, e il 5% ne ha lanciata più di una. Una società su quattro pianifica di implementare app mobili nei tablet; oltre il 40% pianifica di utilizzare strumenti HTLM5 per implementare applicazioni cross-platform',
                    'image'=>'img/techfit_icons_Q-D2.png'
                )
            ),
            'page3' => array(
                'title' => 'Mobilità',
                'questions' => array(
                    'm3'=>array(
                        'type'=>'button',
                        'question'=>'Supporta l\'utilizzo di dispositivi tablet nella sua azienda?',
                        'name'=>'m3',
                        'options'=>array(
                            array(
                                'label'=>'Sì, supportiamo e forniamo i tablet per i dipendenti che ne hanno bisogno per lavoro',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Supportiamo l\'uso di tablet se i dipendenti portano i propri',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Forniamo tablet per i dirigenti senior, su richiesta',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'I tablet possono essere uno strumento potente per i dipendenti che operano fuori sede (ad es., nei settori delle vendite e dei servizi), per i lavoratori della conoscenza e per i manager che desiderano un accesso ottimizzato a reportistica, ecc. L\'ultimo studio di IDC dimostra che il 62% delle società ha valutato o implementato l\'uso di tablet. ',
                    'image'=>'img/techfit_icons_Q-D3.png'
                )
            ),
            'page4' => array(
                'title' => 'Mobilità',
                'questions' => array(
                    'm4'=>array(
                        'type'=>'button',
                        'question'=>'La sua società offre la possibilità al personale di stampare direttamente dai propri dispositivi mobili?',
                        'name'=>'m4',
                        'options'=>array(
                            array(
                                'label'=>'Sì, da qualsiasi dispositivo',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sì, solo da dispositivi di proprietà dell\'azienda',
                                'value'=>3,
                                'checked'=>false
                            ),

                            array(
                                'label'=>'Sì, solo da portatili aziendali',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Si tratta di una richiesta sempre più frequente da parte degli utenti aziendali. Attualmente lo consente l\'85% delle società [Studio IDC]. Sono incluse numerose opzioni, tra cui la stampa wireless (WiFi); la stampa tramite cloud; le stampanti compatibili con Bluetooth.',
                    'image'=>'img/techfit_icons_Q-D4.png'
                )
            ),
            'page5' => array(
                'title' => 'Mobilità',
                'questions' => array(
                    'm5'=>array(
                        'type'=>'button',
                        'question'=>'La sua società consente al personale di stampare mentre si trova all\'esterno dell\'ufficio da computer portatili o altri dispositivi mobili? ',
                        'name'=>'m5',
                        'options'=>array(
                            array(
                                'label'=>'Sì, da qualsiasi dispositivo',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sì, solo da dispositivi di proprietà dell\'azienda',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sì, da dispositivi BYOD e/o gestiti dall\'azienda',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Efficienza ed efficacia migliorate. Il 68% delle organizzazioni permette di stampare dall\'esterno',
                    'image'=>'img/techfit_icons_Q-D5.png'
                )
            )
        )
    ),
    'bigdataanalytics' => array(
        'colour' => 'light-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Statistiche basate su Big Data',
                'questions' => array(
                    'd1'=>array(
                        'type'=>'button',
                        'question'=>'I suoi dipendenti hanno la possibilità di usufruire di strumenti di visualizzazione per esplorare i dati in modo approfondito e creare report?',
                        'name'=>'d1',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'In corso di valutazione',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'L\'uso di strumenti di visualizzazione non è diffuso tra le organizzazioni in Europa occidentale per l\'esplorazione interattiva e l\'analisi dei dati. Nel campo dei lavoratori della conoscenza, in particolare, tali strumenti sono un fattore critico di successo.',
                    'image'=>'img/techfit_icons_Q-E1.png'
                )
            ),
            'page2' => array(
                'title' => 'Statistiche basate su Big Data',
                'questions' => array(
                    'd2'=>array(
                        'type'=>'button',
                        'question'=>'Ora che l\'analisi di tutti i dati aziendali cresce in importanza, qual è la sua posizione in merito alle statistiche basate su cloud?',
                        'name'=>'d2',
                        'options'=>array(
                            array(
                                'label'=>'Utilizziamo un servizio di statistiche basato su cloud',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Abbiamo valutato ma non ancora implementato le statistiche basate su cloud ',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC West European survey: il 27% delle organizzazioni investe in tecnologie di storage per stare al passo con l\'aumento di dati',
                    'image'=>'img/techfit_icons_Q-E2.png'
                )
            ),
            'page3' => array(
                'title' => 'Statistiche basate su Big Data',
                'questions' => array(
                    'd3'=>array(
                        'type'=>'button',
                        'question'=>'Attualmente utilizza tecnologie relative ai Big Data nella sua azienda?',
                        'name'=>'d3',
                        'options'=>array(
                            array(
                                'label'=>'Attualmente utilizziamo tecnologie relative ai Big Data nella nostra azienda',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Pianifichiamo di implementare tecnologie relative ai Big Data nei prossimi 6-18 mesi',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Stiamo valutando le possibilità',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non sono previsti piani',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC West European survey: il 21% degli utenti finali nelle organizzazioni europee accede ai Big Data, tramite i feed nei sistemi di produzione esistenti o tramite sistemi di produzione specifici per Big Data.',
                    'image'=>'img/techfit_icons_Q-E3.png'
                )
            ),
            'page4' => array(
                'title' => 'Statistiche basate su Big Data',
                'questions' => array(
                    'd4'=>array(
                        'type'=>'button',
                        'question'=>'Dispone di procedure per la gestione delle opinioni espresse sui social media? ',
                        'name'=>'d4',
                        'options'=>array(
                            array(
                                'label'=>'Sì',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Soluzione allo studio',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC West European survey: il 15% delle organizzazioni utilizza i Big Data per analizzare o utilizzare le informazioni tratte da social media',
                    'image'=>'img/techfit_icons_Q-E4.png'
                )
            )
        )
    )
);