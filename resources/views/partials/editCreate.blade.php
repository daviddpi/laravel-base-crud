<div class="card">
    <form action="{{  $request->routeIs('comic.edit') ? route('comic.update', $guest) : route('comic.store') }}" 
    method="POST">
    @csrf
    @if($request->routeIs('comic.edit')) 
        @method('PATCH')
    @endif
        <div class="card-body">
          <h5>{{ $request->routeIs('comic.edit') ? "Modifica $guest->name" : "Inserisci un nuovo fumetto" }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            $table->smallInteger("price")->unsigned();
            $table->text("url_comic")->nullable();
            {{-- titolo  --}}
          <li class="list-group-item">
            <label for="name" class="form-label">Titolo fumetto</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Inserisci il titolo" value="{{$comic->title}} required">
          </li>
            {{-- autore --}}
          <li class="list-group-item">
            <label for="author" class="form-label">Autore fumetto</label>
            <input class="form-control" type="text" id="author" name="author" placeholder="Inserisci l'autore" value="{{$comic->author}} required">
          </li>
            {{-- descrizione --}}
          <li class="list-group-item">
            <label for="description" class="form-label">Descrizione fumetto</label>
            <input class="form-control" type="text" id="description" name="description" placeholder="Inserisci la descrizione" value="{{$comic->description}} required">
          </li>
            {{-- prezzo --}}
          <li class="list-group-item">
            <label for="price" class="form-label">Prezzo fumetto</label>
            <input class="form-control" type="number" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}} required">
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
    </form>
</div>
<h1>Ciao</h1>