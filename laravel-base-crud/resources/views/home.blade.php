@extends('layouts.main')

@section('title', 'Homepage')

@section('main-section-id', 'comics-show')

@section('main-content')
    <h1>Lista Fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Data</th>
                <th scope="col">Description</th>
                <th scope="col">Immagine</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Lista vuota</td>
                </tr>
                @endforelse
        </tbody>
    </table>
@endsection 