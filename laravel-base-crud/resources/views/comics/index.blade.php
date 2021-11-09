@extends('layouts.main')

@section('title', 'Guest list')

@section('main-section-id', 'comics-show')

@section('main-content')
    <h1>Lista Fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td><a href="{{ route('comics.show', $comic->id) }}">{{$comic->title}}</a></td>
                    <td>{{$comic->authore}}</td>
                    <td>{{$comic->year}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Lista vuota</td>
                </tr>
                @endforelse
        </tbody>
    </table>
@endsection 