@extends('layouts.main')
@section("title", "Dettaglio fumetto")

@section('content')
    <div class="container">
        <div class="row">

            <a class="mb-5 p-3" href="{{ route("comic.index")}}">torna indietro</a>

            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$comic->url_comic}}" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h5 class="card-title">Autore: {{$comic->author}}</h5>
                        <p class="card-text">Descrizione: 
                            {{ $comic->description}}
                        </p>
                        <h6>Prezzo: {{$comic->price}} &euro;</h6>
                    </div>
                    <a class="p-4" href="{{ route("comic.edit", $comic->id) }}">Modifica</a>
                </div>
            </div>
        </div>
    </div>
@endsection