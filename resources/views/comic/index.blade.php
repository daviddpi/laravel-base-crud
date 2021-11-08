@extends('layouts.main')
@section("title", "Fumetti")

@section('content')
    <div class="container">
        <div class="row">
            {{-- @foreach ($comics as $comic) --}}
                <div class="col-4">
                    <a href="{{ route('comic.show') }}">
                        <figure>
                            {{-- <img src="{{$comic->url_comic}}" alt="Fumetto"> --}}
                        </figure>
                    </a>
                </div>
            {{-- @endforeach --}}

        </div>
    </div>
@endsection