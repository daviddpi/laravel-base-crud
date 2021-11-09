@extends('layouts.main')
@section("title", "Fumetti")

@section('content')
    <div class="container">
        <div class="row">
            <h1>Fumetti</h1>
            
            @if (session('delete'))
                <div class="alert alert-success" role="alert">
                    {{ session('delete') }} Cancellazione eseguita correttamente!
                </div>
            @endif
            
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
                        <div class="d-flex justify-content-evenly align-items-center">
                            <a class="p-4" href="{{ route("comic.edit", $comic->id) }}">Modifica</a>
                            <form class="delete-comic" data-title="{{$comic->title}}" action="{{ route("comic.destroy", $comic)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Elimina fumetto
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <a class="p-4" href="{{ route("comic.create")}}">Aggiungi fumetto</a>

    </div>
@endsection

@section('script-content')
    <script>

        const deleteConfirm = document.querySelectorAll(".delete-comic");
        deleteConfirm.forEach(element => {
            element.addEventListener("submit", function(event){

                event.preventDefault();

                const title = element.getAttribute("data-title");
                const confirm = window.confirm(`Sicuro di voler eliminare ${title}?`);

                if(confirm) this.submit();

            });
        });
    </script>
@endsection