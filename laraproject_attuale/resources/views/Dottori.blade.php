@extends('layouts.public')

@section('content')
@isset($lista)
@foreach ($lista as $dottore) 
<div id="content">
   <!--vado a scandire l'array associando ad ogni array un oggetto di oggetto 'product'-->
      <div class="container" style="padding-top: 10px;">
        <div style="background-color: #1A76D1; display: flex; align-items: center ; border-radius: 0.7em;" >
        <!-- Colonna sinistra per l'immagine del dottore -->
        <div class="col-lg-6-adattato">
            <div class="cerchioImmagine1">
                <img src="{{ asset('images/author2.jpg') }}" alt="Foto di un dottore" class="immagine1">
            </div>
        </div>
        <!-- Colonna destra per il nome del dottore -->
        <div class="col-lg-6-adattato">
            <h1 class="doctor-title" style="text-align: left;">{{$dottore -> nome }}</h1>
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
                padding-left: 4%;">{{ $dottore -> descrizione }}</h6>
                </div>

                <div style=" align-self: flex-end; padding-left: 2%; width: 30%;" >
                    <div class = "rettangoloDottore1">

                        <h6 style="color: white;padding-left: 15px;padding-top: 15px;">Contatti:</h6>

                        <h7 style="color: white;padding-left: 15px;padding-top: 8px;"> Numero di telefono: </h7>
                        <h8 style="color: white;padding-left: 30px;">{{ $dottore ->numero }}</h8><br>
                         <h7 style="color: white;padding-left: 15px; padding-top: 8px;">Indirizzo Email:</h7>
                    <h8 style="color: white;padding-left: 30px;">{{ $dottore ->email }}</h8><br><h6></h6><br>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endforeach
@endisset()
@endsection


