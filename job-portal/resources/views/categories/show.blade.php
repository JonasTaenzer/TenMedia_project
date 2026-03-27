@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>

    <div class="action-links">
        <a href="{{ route('categories.edit', $category) }}">Bearbeiten</a>
        <a href="{{ route('categories.index') }}">Zurück</a>
    </div>
@endsection