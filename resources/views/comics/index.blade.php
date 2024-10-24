@extends('layouts.app')

@section('page-title', 'Index')

@section('main-content')
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>
        Dc Comics
    </h1>
    <a href="{{ route('comics.create')}}" class="btn btn-dark">
        New
    </a>
</div>

<div class="row">
    @foreach ($comics as $comic)
        <div class="col-3 p-2">
            <div class="card">
                <img src="{{ $comic->src }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->comic_name }}</h5>
                    <p class="card-text">Prezzo: {{ $comic->price }}&euro;</p>
                </div>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                    Info
                </a>
            </div>
            
        </div>
    @endforeach
</div>
@endsection