@extends('layouts.comics-layout')

@section('content')

    <ol>
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li> {{ $comic['title'] }} </li>
                    <li> {{ $comic['author'] }} </li>
                    <li> <a href="{{ $comic['cover'] }}">Cover img</a></li>
                    <li> {{ $comic['year'] }} </li>
                    <li> {{ $comic['review'] }} </li>
                    <li> {{ $comic['vote'] }} </li>
                </ul>
            </li>
            <br><br>
        @endforeach
    </ol>

@endsection