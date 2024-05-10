@extends('layouts.public') <!--genera una vista che è un' estenzione della vista del layout quindi riusa sempre quella -->
<!--pagina che genera la pagina dei prodotti -->
<!-- inizio sezione prodotti -->
<!-- template attivato per ogni azione che viene avviata dal controller -->
@section('content') <!--definisce la sezione -->

<div id="content">
    @isset($lista)
      @foreach ($lista as $dottore) <!--vado a scandire l'array associando ad ogni array un oggetto di oggetto 'product'-->
      <div class="container" style="padding-top: 10px;">
        <div style="background-color: #1A76D1; display: flex; align-items: center ; border-radius: 0.7em;" >
        <!-- Colonna sinistra per l'immagine del dottore -->
        <div class="col-lg-6-adattato">
            <div class="cerchioImmagine1">
                <img src="img/doc.jpeg" alt="Foto di un dottore" class="immagine1">
            </div>
        </div>
        <!-- Colonna destra per il nome del dottore -->
        <div class="col-lg-6-adattato">
            <h1 class="doctor-title" style="text-align: left;">{{$dottore -> qualifica }}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div style="background-color: #0000; display: flex; align-items: center ;" >

        <div class="col-lg-6-adattato2">
            <h2 class="doctor-title" style="text-align: left; color: black;
			padding-left: 3%; width: max-content;"
			>{{ $dottore ->qualifica }}</h2>
			</div>
    </div>

    <div class="container2" >
        <div style="background-color: #0000; display: flex ;" >

            <div style="width: 70%; float: left;" >
                <h6 class="doctor-title" style="text-align: left; padding-bottom: 2%; color: black;
                padding-left: 4%;">
                    La dottoressa Giovanna Rossi è un medico esperto con oltre 20 anni di esperienza nel campo della medicina. Ha conseguito la laurea in medicina presso l'Università di Bologna con lode, distinguendosi per il suo impegno accademico e la sua passione per il benessere dei pazienti.
                    Durante la sua carriera, il Dottor Rossi ha ricoperto diverse posizioni di rilievo in vari ospedali e cliniche, affinando le sue competenze in diverse specialità mediche, tra cui cardiologia, oncologia e medicina interna. È stato riconosciuto per la sua dedizione e professionalità nel trattamento di pazienti con patologie complesse, dimostrando una capacità eccezionale di diagnosticare e gestire una vasta gamma di condizioni mediche.
                    Oltre alla sua attività clinica, il Dottor Rossi ha anche svolto attività di ricerca e insegnamento, contribuendo all'avanzamento della conoscenza medica e formando le nuove generazioni di medici. È autore di numerose pubblicazioni scientifiche e ha tenuto conferenze nazionali e internazionali su temi di medicina e salute.
                    La sua dedizione al benessere dei pazienti, la sua competenza clinica e il suo impegno nell'educazione e nella ricerca lo rendono un punto
                    di riferimento nel campo della medicina, apprezzato sia dai suoi colleghi che dai suoi pazienti.
            </h6>
                </div>

                <div style=" align-self: flex-end; padding-left: 2%; width: 30%;" >
                    <div class = "rettangoloDottore1">

                        <h6 style="color: white;padding-left: 15px;padding-top: 15px;">Contatti:</h6>

                        <h7 style="color: white;padding-left: 15px;padding-top: 8px;"> Numero di telefono: </h7>
                        <h8 style="color: white;padding-left: 30px;">+1234567890</h8><br>
                         <h7 style="color: white;padding-left: 15px; padding-top: 8px;">Indirizzo Email:</h7>
                    <h8 style="color: white;padding-left: 30px;">an@example.com</h8><br><h6></h6><br>
                    </div>
                </div>
        </div>
    </div>



      @endforeach
    @endisset()
</div>
</div>
<!-- fine sezione prodotti -->




<!-- fine sezione laterale -->
@endsection


