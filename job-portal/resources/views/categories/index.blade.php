@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}">Neue Category erstellen</a>

    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
                - <a href="{{ route('categories.edit', $category) }}">Bearbeiten</a>
            </li>
        @endforeach
    </ul>
@endsection