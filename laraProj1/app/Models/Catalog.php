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
                            'nome' => 'Samantha',
                            'qualifica' => 'Chirurgo',
                            'descrizione' => "La dottoressa Giovanna Rossi è un medico esperto con oltre 20 anni di esperienza nel campo della medicina. Ha conseguito la laurea in medicina presso l'Università di Bologna con lode, distinguendosi per il suo impegno accademico e la sua passione per il benessere dei pazienti. Durante la sua carriera, il Dottor Rossi ha ricoperto diverse posizioni di rilievo in vari ospedali e cliniche, affinando le sue competenze in diverse specialità mediche, tra cui cardiologia, oncologia e medicina interna. È stato riconosciuto per la sua dedizione e professionalità nel trattamento di pazienti con patologie complesse, dimostrando una capacità eccezionale di diagnosticare e gestire una vasta gamma di condizioni mediche. Oltre alla sua attività clinica, il Dottor Rossi ha anche svolto attività di ricerca e insegnamento, contribuendo all'avanzamento della conoscenza medica e formando le nuove generazioni di medici. È autore di numerose pubblicazioni scientifiche e ha tenuto conferenze nazionali e internazionali su temi di medicina e salute. La sua dedizione al benessere dei pazienti, la sua competenza clinica e il suo impegno nell'educazione e nella ricerca lo rendono un punto di riferimento nel campo della medicina, apprezzato sia dai suoi colleghi che dai suoi pazienti.",
                            'email' => 'email@example.com',
                            'numero' => '3454562685',
                            'num_lista'=> 2
                        ),
                        (object) array(
                            'nome' => 'Samantha2',
                            'qualifica' => 'Chirurgo2',
                            'descrizione' => "Con oltre 20 anni di esperienza nel campo della medicina. Ha conseguito la laurea in medicina presso l'Università di Bologna con lode, distinguendosi per il suo impegno accademico e la sua passione per il benessere dei pazienti. Durante la sua carriera, il Dottor Rossi ha ricoperto diverse posizioni di rilievo in vari ospedali e cliniche, affinando le sue competenze in diverse specialità mediche, tra cui cardiologia, oncologia e medicina interna. È stato riconosciuto per la sua dedizione e professionalità nel trattamento di pazienti con patologie complesse, dimostrando una capacità eccezionale di diagnosticare e gestire una vasta gamma di condizioni mediche. Oltre alla sua attività clinica, il Dottor Rossi ha anche svolto attività di ricerca e insegnamento, contribuendo all'avanzamento della conoscenza medica e formando le nuove generazioni di medici. È autore di numerose pubblicazioni scientifiche e ha tenuto conferenze nazionali e internazionali su temi di medicina e salute. La sua dedizione al benessere dei pazienti, la sua competenza clinica e il suo impegno nell'educazione e nella ricerca lo rendono un punto di riferimento nel campo della medicina, apprezzato sia dai suoi colleghi che dai suoi pazienti.",
                            'email' => 'email@example.com',
                            'numero' => '3384562685',
                            'num_lista'=> 1
                        )
                    ),


        );
}

public function getDottori(int $Numero): Collection {
    return $this->_Dottore->filter(function ($dottore) use ($Numero) {
        return $dottore->num_lista === $Numero;
    });
}




}


