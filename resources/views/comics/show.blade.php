@extends('layouts.app')

@section('page-title', 'Show')

@section('main-content')
<h1>
    Single Comic Details
</h1>

<div class="row">
    
        <div class="col p-2">
            <div class="card">
                <img src="{{ $comic->src }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->comic_name }}</h5>
                    <p class="card-text">Prezzo: {{ $comic->price }}&euro;</p>
                    <p class="card-text">Prezzo: {{ $comic->type }}</p>
                    <p class="card-text">Prezzo: {{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    
</div>

@endsection