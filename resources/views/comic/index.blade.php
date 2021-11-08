@extends('layouts.main')
@section("title", "Fumetti")

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 pt-5">
                    <div class="card" style="width: 18rem;">
                        <a href="{{ route("comic.show", $comic->id)}}">
                            <img class="card-img-top" src="{{$comic->url_comic}}" alt="Card image cap" title="clicca per vedere i dettagli del fumetto">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">
                                {{ $comic->description}}
                            </p>
                        </div>
                        <a class="p-4" href="#">Modifica</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="p-4" href="{{ route("comic.create")}}">Aggiungi fumetto</a>

    </div>
@endsection