@extends('layouts.main')

@section('title', 'Creazione nuovo Fumetto')

@section('main-section-id', 'comics-create')

@section('main-content')
    <div class="card-title d-flex justify-content-between align-items-center">
        <h1>Crea un nuovo Fumetto</h1>
        <a href="{{ route('comics.index') }}">Torna alla lista </a>
    </div>
    <div class="card-body">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-6">
                    <label for="title" class="form-label">Titolo Fumetto</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo del fumetto" required>
                </div>

                <div class="col-6">
                    <label for="authore" class="form-label">Autore Fumetto</label>
                    <input type="text" id="authore" name="authore" placeholder="Inserisci l'autore del fumetto" required>
                </div>

                <div class="col-6">
                    <label for="year" class="form-label">Anno Fumetto</label>
                    <input type="text" id="year" name="year" placeholder="Inserisci l'anno del fumetto" required>
                </div>

                <div class="col-6">
                    <label for="description" class="form-label">Descrizione Fumetto</label>
                    <input type="text" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" required>
                </div>
                
                <div class="col-6 ">
                    <label for="img_url" class="form-label">Immagine Fumetto</label>
                    <input type="text" id="img_url" name="img_url" placeholder="Inserisci l'immagine del fumetto">
                </div>

                <div class="col-3 ">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
                

            </div>
        </form>
    </div>
@endsection