<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Catalog;//importa altre classi ad esempio Catalog
use Illuminate\Support\Facades\Log;
//estenzioni della classe controller in laravel
//il file deve iniziare con lettera maiuscola e Controller come finale e C MAIUSCOLA




class PublicController extends Controller
{

    protected $_catalogModel; //che cosa contiene la proprieta catalogmodel ci implementa il model dove ci saranno tutte le informazioni
    //che la nostra applicazione prende da mettere nella classe

    //se una classe ha un metodo __construct serve per istanziare l'oggetto
    public function __construct() {
        $this->_catalogModel = new Catalog; //è il modello del nostro catalogo dove ci sarà la presentazione di tutti i dati che ci fornisce
    }

    //metodo senza parametri perche generà l'home page del sito senza passargli nessun parametro
    public function showDottori(int $Numero): View {//prende lo stesso nome che abbiamo definito nelle rotte, questa azione recuper i dati e restituisce

        $Doc = $this->_catalogModel->getDottori($Numero); //i dati che servono sono i dati delle categorie top
        //attiva dell'oggetto che rappresenta il model il metodo del getTopCats
        return view('Dottori')
                        ->with('lista', $Doc); //prodotti in cascata dove alla vista catalog viene passati i valori che abbiamo estratto dal model
    }



}
