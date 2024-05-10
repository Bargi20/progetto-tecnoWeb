<?php

namespace App\Models; //riprende la cartella di dove sta

use Illuminate\Support\Collection; //ci consente di creare array di oggetti in questa versione non viene utilizzata una base di dati
//rappresenteremo in memoria la stessa struttura dati che il php usa per estrarre i dati dalla base di dati

class Catalog {
    //valore che definisce la descrizione estesa del prodotto

    protected $_Dottore; //proprietà protette che rappresentano le categorie top , le sotto categorie e i prodotti
    public function __construct() { //per il costruttore che segna i valori delle 3 proprietà
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
                    }
                        

public function getDottori(int $Numero): Collection {
    return $this->_Dottore->filter(function ($dottore) use ($Numero) {
        return $dottore->num_lista === $Numero;
    });
}




}


