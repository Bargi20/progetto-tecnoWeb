<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     */

    public function run(): void {

        DB::table('FAQ')->insert([
            ['Id_Faq' => 1, 
            'Domanda' => 'Cos è la telemedicina e come funziona nella neuro-riabilitazione?', 
            'Risposta' => 'La telemedicina è una pratica che consente ai pazienti di
            ricevere cure mediche a distanza tramite la tecnologia. Nella neuro-riabilitazione,
             la telemedicina permette ai pazienti di ricevere valutazioni, consulenze e terapie
             riabilitative tramite strumenti di monitoraggio remoto e comunicazione online con i clinici specializzati.'
            ],
            ['Id_Faq' => 2, 
            'Domanda' => 'Quali sono i vantaggi della telemedicina rispetto alle visite in presenza?',
            'Risposta' => 'La telemedicina è una pratica che consente ai pazienti di
            ricevere cure mediche a distanza tramite la tecnologia. Nella neuro-riabilitazione,
             la telemedicina permette ai pazienti di ricevere valutazioni, consulenze e terapie
             riabilitative tramite strumenti di monitoraggio remoto e comunicazione online con i clinici specializzati.',
            ],
            ['Id_Faq' => 3, 
            'Domanda' => 'Come posso registrarmi come clinico sul sito?',
            'Risposta' => 'Puoi registrarti come clinico compilando il modulo di registrazione sul sito e fornendo le informazioni richieste.
            Dopo la verifica da parte dell amministratore, otterrai le credenziali di accesso per accedere alle funzionalità riservate. ',
            ],  
        ]);

    }

}
