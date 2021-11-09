@extends('layouts.main')

@section('title', $comic->title . 'Comic')

@section('main-section-id', 'comic-show')

@section('main-content')
    <h1>{{$comic->title}}</h1>
    <div class="card-body row">
        <div class="col-4">
            <img src="{{ $comic->img_url }}" alt="">
        </div>
        <div class="col-8">
            <h2>Autore: {{ $comic->authore }}</h2>
            <h3>Anno di uscita: {{ $comic->year }}</h3>
            <p>Descrizione: {{ $comic->description }}</p>
        </div>
    </div>
    
@endsection 