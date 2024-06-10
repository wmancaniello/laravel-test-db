@extends('layouts.app')

@section('content')
    <h1>Elenco dei Libri</h1>
    <ul>
        @foreach ($bookTitles as $title)
            <li>{{ $title }}</li>
        @endforeach
    </ul>
@endsection
