<div class="card">
    <form action="{{ $request->routeIs('comic.edit') ? route('comic.update', $comic) : route('comic.store') }}" 
    method="post">
    @csrf
    @if($request->routeIs('comic.edit')) 
        @method('PATCH')
    @endif
        <div class="card-body">
          <h5>{{ $request->routeIs('comic.edit') ? "Modifica $comic->title" : "Inserisci un nuovo fumetto" }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            {{-- titolo  --}}
          <li class="list-group-item">
            <label for="name" class="form-label">Titolo fumetto</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Inserisci il titolo" value="{{$comic->title}}" required>
          </li>
            {{-- autore --}}
          <li class="list-group-item">
            <label for="author" class="form-label">Autore fumetto</label>
            <input class="form-control" type="text" id="author" name="author" placeholder="Inserisci l'autore" value="{{$comic->author}}" required>
          </li>
            {{-- descrizione --}}
          <li class="list-group-item">
            <label for="description" class="form-label">Descrizione fumetto</label>
            <input class="form-control" type="text" id="description" name="description" placeholder="Inserisci la descrizione" value="{{$comic->description}}" required>
          </li>
            {{-- prezzo --}}
          <li class="list-group-item">
            <label for="price" class="form-label">Prezzo fumetto</label>
            <input class="form-control" type="number" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}" required>
          </li>
            {{-- url  --}}
          <li class="list-group-item">
            <label for="url_comic" class="form-label">Url fumetto</label>
            <input class="form-control" type="text" id="url_comic" name="url_comic" placeholder="Inserisci url del fumetto" value="{{$comic->url_comic}}" required>
          </li>
        </ul>
        <div class="card-body">
          <button type="reset" class="btn btn-secondary">Svuota tutto</button>
          <button type="submit" class="btn btn-primary">Salva modifiche</button>
          <a class="mb-5 p-3" href="{{ route("comic.index")}}">torna indietro</a>
        </div>
    </form>
</div>