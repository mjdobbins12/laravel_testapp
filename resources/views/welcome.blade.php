@extends('layout')

@section('content')
    <h1>Exploring the many features of Laravel...through for example this list</h1>
    <h2> {{ $message }} </h2>
    <ul>
        @foreach($faves as $fave)
            <li>{{ $fave }}</li>
        @endforeach
    </ul>
@endsection