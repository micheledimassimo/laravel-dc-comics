@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
<h1>
    Comic Create
</h1>

<div class="row">
    
        <div class="col p-2">
            <div>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Inserisci il titolo.." maxlength="128">
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="src" name="src" required placeholder="Inserisci l'url della immagine di copertina.." maxlength="1024">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" required placeholder="Inserisci il prezzo..">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie.." maxlength="64">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo.." maxlength="64">
                </div>
                <div class="my-3 form-floating">
                    <textarea class="form-control" required placeholder="Inserisci la descrizione" name="description" id="description" maxlength="4096" style="height: 100px"></textarea>
                    <label for="description">Descrizione</label>
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>
            </div>
        </div>
    
</div>

@endsection