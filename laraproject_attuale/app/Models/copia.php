<?php

namespace App\Models; //riprende la cartella di dove sta

use Illuminate\Support\Collection; //ci consente di creare array di oggetti in questa versione non viene utilizzata una base di dati
//rappresenteremo in memoria la stessa struttura dati che il php usa per estrarre i dati dalla base di dati

class Catalog {
    //valore che definisce la descrizione estesa del prodotto
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    protected $_topCats, $_subCats, $_prods; //proprietà protette che rappresentano le categorie top , le sotto categorie e i prodotti

    public function __construct() { //per il costruttore che segna i valori delle 3 proprietà
        $this->_topCats = collect(
                array(
                    (object) array(
                        'catId' => '1',
                        'name' => 'Computer',
                        'parId' => '0', //categoria padre da cui discende, in questo caso non è figlia di nessuno
                        'desc' => 'Desktop, Laptop, Netbook'
                    ),
                    (object) array(
                        'catId' => '2',
                        'name' => 'Periferiche',
                        'parId' => '0',
                        'desc' => 'Hard Disk, Tastiere, Mouse'
                    )
                )
        );

        $this->_subCats = collect(
                array(
                    (object) array(
                        'catId' => '3',
                        'name' => 'Desktop',
                        'parId' => '1',//prende l'id del padre
                        'desc' => 'Descrizione dei Prodotti Desktop'
                    ),
                    (object) array(
                        'catId' => '4',
                        'name' => 'Laptop',
                        'parId' => '1',
                        'desc' => 'Descrizione dei Prodotti Laptop'
                    ),
                    (object) array(
                        'catId' => '5',
                        'name' => 'NetBook',
                        'parId' => '1',
                        'desc' => 'Descrizione dei Prodotti NetBook'
                    ),
                    (object) array(
                        'catId' => '6',
                        'name' => 'HardDisk',
                        'parId' => '2',
                        'desc' => 'Descrizione dei Dischi Rigidi')
                )
        );

        $this->_prods = collect(
                array(
                    (object) array(
                        'prodId' => '1',
                        'name' => 'Desktop Modello1',
                        'catId' => '3',
                        'descShort' => 'Caratteristiche Desktop1',
                        'descLong' => self::DESCPROD,
                        'price' => '1230.49',
                        'discountPerc' => '25',
                        'discounted' => '1',
                        'image' => 'Italy.gif'
                    ),
                    (object) array(
                        'prodId' => '2',
                        'name' => 'Laptop Modello1',
                        'catId' => '4',
                        'descShort' => 'Caratteristiche Laptop1',
                        'descLong' => self::DESCPROD,
                        'price' => '445.37',
                        'discountPerc' => '17',
                        'discounted' => '0',
                        'image' => '' //non c'è un immagine predefinita
                    ),
                    (object) array(
                        'prodId' => '3',
                        'name' => 'Laptop Modello2',
                        'catId' => '4',
                        'descShort' => 'Caratteristiche Laptop2',
                        'descLong' => self::DESCPROD,
                        'price' => '1889.67',
                        'discountPerc' => '15',
                        'discounted' => '1',
                        'image' => 'Argentina.gif'
                    ),
                )
        );
    }

    public function getTopCats(): Collection {
        return $this->_topCats;
    }

    public function getCatsByParId(int $topId): Collection {
        return $this->_subCats->filter(function ($cat) use //usato n volte fino a quando ci stanno gli id
         ($topId) { //metodo filter prende una funzione che definisce quali sono le condizioni di filtro che
            //determinano l'estrazione che viene definita con un parametro dove verranno mandate tutte le categorie
                    return $cat->parId == $topId; //dove il parametro prenderà il parametro id del prodotto visto che ci serve il topID dobbiamo passare il dato
                    //come variabile globale nella funzione e acquisiamo tutte le categorie che hanno lo stesso valore tra parId e topId
                });
    }

    public function getProdsByCat(int $catId): Collection {
        return $this->_prods->filter(function ($prod) use ($catId) {
                    return $prod->catId == $catId;
                });
    }

}

