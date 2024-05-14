<?php

namespace App\Models; //riprende la cartella di dove sta

use Illuminate\Support\Collection; //ci consente di creare array di oggetti in questa versione non viene utilizzata una base di dati
//rappresenteremo in memoria la stessa struttura dati che il php usa per estrarre i dati dalla base di dati

class Catalog {
    //valore che definisce la descrizione estesa del prodotto

    protected $_Dottore, $_Faq;//proprietà protette che rappresentano le categorie top , le sotto categorie e i prodotti
    public function __construct() { 
        $this->_Dottore = collect(
                array(
                        (object) array(
                            'nome' => 'Dr. Alessandro Rossi',
                            'qualifica' => 'Neurologo Specializzato in Riabilitazione',
                            'descrizione' => "Il Dr. Rossi porta con sé oltre 15 anni di esperienza nella neuro-riabilitazione. Ha condotto ricerche innovative sui disturbi motori e ha pubblicato numerosi articoli su riviste specializzate. La sua passione per l'aiuto ai pazienti lo ha spinto a implementare soluzioni tecnologiche avanzate 
                            per migliorare la qualità della vita dei suoi assistiti.",
                            'email' => 'a.rossi.neuro@gmail.com',
                            'numero' => '+39 123456789',
                            'num_lista'=> 1
                        ),
                        (object) array(
                            'nome' => 'Dr. Elena Bianchi',
                            'qualifica' => 'Fisiatra Esperta in Neuro-riabilitazione',
                            'descrizione' => "La Dr.ssa Bianchi è nota per la sua dedizione alla riabilitazione neurologica. Ha lavorato con pazienti di tutte le età e ha una profonda comprensione dei diversi approcci terapeutici. La sua attenzione ai dettagli
                             e il suo impegno verso l'innovazione rendono i suoi trattamenti efficaci e personalizzati.",
                            'email' => 'elena.bianchi.md@gmail.com',
                            'numero' => '+39 987654321',
                            'num_lista'=> 2
                        ),
                        (object) array(
                            'nome' => 'Dr. Marco De Luca',
                            'qualifica' => 'Neurochirurgo e Neuro-riabilitatore',
                            'descrizione' => "Il Dr. De Luca è un esperto nel trattamento dei disturbi motori causati da lesioni cerebrali e spinali. La sua formazione multidisciplinare gli consente di adottare approcci terapeutici diversificati per soddisfare le esigenze specifiche di ciascun paziente. È noto per la sua pazienza e il suo approccio empatico.",
                            'numero' => '+39 567890123',
                            'email' => 'm.deluca.neuro@gmail.com',
                            'num_lista'=> 3
                        ),
                        (object) array(
                            'nome' => 'Dr. Martina Ferrari',
                            'qualifica' => 'Fisioterapista Specializzata in Neuro-riabilitazione',
                            'descrizione' => "La Dr.ssa Ferrari ha una vasta esperienza nella progettazione e nell'implementazione di programmi di riabilitazione personalizzati per pazienti con disturbi motori. La sua approfondita conoscenza dell'anatomia e della fisiologia le permette di sviluppare trattamenti efficaci e mirati.",
                            'numero' => '+39 345678912',
                            'email' => 'martina.ferrari.pt@gmail.com',
                            'num_lista'=> 4
                        ),
                        (object) array(
                            'nome' => 'Dr. Giorgio Moretti',
                            'qualifica' => 'Medico Fisiatra e Riabilitatore',
                            'descrizione' => "Il Dr. Moretti è un pioniere nell'uso delle tecnologie avanzate nella riabilitazione. Ha condotto ricerche all'avanguardia sulle nuove modalità di monitoraggio e trattamento dei disturbi motori. La sua dedizione alla ricerca lo ha reso un punto di riferimento nella comunità medica.",
                            'numero' => '+39 234567890',
                            'email' => 'giorgio.moretti.md@gmail.com',
                            'num_lista'=> 5
                        )

                        )
                        );

        $this->_Faq = collect(
                array(
                        (object) array(
                            'Domanda' => 'Cos è la telemedicina e come funziona nella neuro-riabilitazione? ' ,
                            'Risposta' => 'La telemedicina è una pratica che consente ai pazienti di
                            ricevere cure mediche a distanza tramite la tecnologia. Nella neuro-riabilitazione,
                             la telemedicina permette ai pazienti di ricevere valutazioni, consulenze e terapie
                             riabilitative tramite strumenti di monitoraggio remoto e comunicazione online con i clinici specializzati.',
                            'Numero' => 1
                        ),
                        (object) array(
                            'Domanda' => 'Quali sono i vantaggi della telemedicina rispetto alle visite in presenza?',
                            'Risposta' => 'I vantaggi includono maggiore accessibilità alle cure,
                            riduzione dei tempi di viaggio e dei costi associati, possibilità di
                            monitoraggio continuo dei pazienti e accesso rapido alle consulenze specialistiche anche da aree remote.',
                            'Numero' => 2
                        ),
                        (object) array(
                            'Domanda' => 'Come posso registrarmi come clinico sul sito?',
                            'Risposta' => 'Puoi registrarti come clinico compilando il modulo di registrazione sul sito e fornendo le informazioni richieste.
                            Dopo la verifica da parte dell amministratore, otterrai le credenziali di accesso per accedere alle funzionalità riservate. ',
                            'Numero' => 3
                        ),
                        (object) array(
                            'Domanda' => 'Cosa devo fare se dimentico la mia password?',
                            'Risposta' => 'Se hai dimenticato la password, puoi fare clic sull opzione "Password dimenticata" nella pagina
                            di accesso e seguire le istruzioni per reimpostare la tua password.',
                            'Numero' => 4
                        ),
                        (object) array(
                            'Domanda' => 'Come posso registrare un nuovo paziente?',
                            'Risposta' => 'Per registrare un nuovo paziente, accedi alla tua area riservata e segui le istruzioni per
                            aggiungere un nuovo paziente compilando il modulo con i suoi dati anagrafici e clinici.',
                            'Numero' => 5
                        ),
                        (object) array(
                            'Domanda' => 'Quali sono i disturbi motori trattati nella neuro-riabilitazione?',
                            'Risposta' => 'I disturbi motori trattati possono includere cadute, blocchi del cammino, paralisi parziale o totale degli arti,
                            tremori e altri disturbi del movimento correlati a condizioni neurologiche.',
                            'Numero' => 6
                        ),
                        (object) array(
                            'Domanda' => 'Come faccio a caricare le informazioni sui disturbi motori come paziente?',
                            'Risposta' => 'Come paziente, puoi caricare le informazioni sui tuoi disturbi motori accedendo alla tua area riservata e compilando il modulo dedicato con i dettagli richiesti per ogni episodio.',
                            'Numero' => 7
                        ),
                        (object) array(
                            'Domanda' => 'Posso cancellare le informazioni sui disturbi motori che ho inserito?',
                            'Risposta' => 'Sì, puoi cancellare le informazioni sui disturbi motori che hai inserito selezionandole dalla lista e seguendo le istruzioni per la cancellazione.',
                            'Numero' => 8
                        ),
                        (object) array(
                            'Domanda' => 'Quali sono le modalità di accesso alle cartelle cliniche dei pazienti?',
                            'Risposta' => 'I clinici possono accedere alle cartelle cliniche dei loro pazienti tramite la propria area riservata, selezionando il paziente desiderato dalla lista dei pazienti registrati.',
                            'Numero' => 9
                        ),
                        (object) array(
                            'Domanda' => 'Come posso modificare la terapia riabilitativa/farmacologica di un paziente?',
                            'Risposta' => 'Puoi modificare la terapia riabilitativa/farmacologica di un paziente accedendo alla sua cartella clinica e selezionando l opzione di modifica della terapia.',
                            'Numero' => 10
                        ),
                        (object) array(
                            'Domanda' => 'Qual è l importanza dell esercizio fisico nella neuro-riabilitazione?',
                            'Risposta' => 'L esercizio fisico svolge un ruolo cruciale nella neuro-riabilitazione poiché aiuta a migliorare la forza muscolare, la flessibilità, la coordinazione e l equilibrio. Inoltre, può contribuire a ridurre il rischio di complicazioni legate all immobilità e favorire il recupero funzionale.',
                            'Numero' => 11
                        ),
                        (object) array(
                            'Domanda' => 'Come posso prenotare una visita specialistica?',
                            'Risposta' => 'Per prenotare una visita specialistica, puoi contattare il nostro centro riabilitativo tramite telefono o email. Il nostro personale ti guiderà attraverso il processo di prenotazione e ti fornirà tutte le informazioni necessarie per il tuo appuntamento.',
                            'Numero' => 12
                        ),
                        
                        (object) array(
                            'Domanda' => 'Quali sono i principali obiettivi della neuro-riabilitazione?',
                            'Risposta' => 'I principali obiettivi della neuro-riabilitazione includono il ripristino delle funzioni motorie compromesse, il miglioramento della qualità della vita del paziente, la prevenzione delle complicazioni associate alla disabilità e il supporto emotivo e psicologico per il recupero completo.',
                            'Numero' => 13
                        ),
                        (object) array(
                            'Domanda' => 'Qual è il ruolo della famiglia nel processo di neuro-riabilitazione del paziente?',
                            'Risposta' => 'La famiglia svolge un ruolo fondamentale nel processo di neuro-riabilitazione del paziente. Oltre a fornire sostegno emotivo e psicologico, la famiglia può essere coinvolta attivamente nella pianificazione e nell esecuzione del programma di riabilitazione. Questo coinvolgimento può includere la partecipazione a sessioni di terapia, l assistenza nell adattamento dell ambiente domestico alle esigenze del paziente e il supporto nel mantenimento di uno stile di vita sano e attivo. Inoltre, la famiglia può aiutare a monitorare i progressi del paziente e a individuare eventuali sfide o difficoltà che possono sorgere durante il percorso di riabilitazione.',
                            'Numero' => 14
                        )
                        
                    )
                );
            }
                        

public function getDottori(int $Numero): Collection {
    return $this->_Dottore->filter(function ($dottore) use ($Numero) {
        return $dottore->num_lista === $Numero;
    });
}

public function getAllDottori(): Collection {
    return $this->_Dottore;
}

public function getfaq() : Collection {
    return $this ->_Faq;
    
}

}


