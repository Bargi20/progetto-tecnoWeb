@extends('layouts.public')

@section('content')
<!--Start Container Dottore 1-->
@isset($lista)
@foreach ($lista as $dottore)
<div class="container">
    <a href="{{ route('prova', $loop->iteration) }}">
                <div class="rettangoloDottore">
                    <div class="col-lg-3">
                        <div class="cerchioImmagine">
                            <img src="images/notfound.png" alt="Foto di un dottore" class="immagine">
                        </div>
                    </div>
                <div>
                <h1 class= "doctor-title" style="text-align: left; padding-top : 50px">{{$dottore -> nome }}</h1>
                    <h3 class= "doctor-title" style="text-align: left;padding-top : 5px">{{$dottore -> qualifica }}</h3>
                </div>
            </div>
        </a>
        </div>
    </div>
</div>

@endforeach
@endisset()


@endsection

