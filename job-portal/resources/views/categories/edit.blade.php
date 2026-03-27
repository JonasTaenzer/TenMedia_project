@extends('layouts.app')

@section('content')
    <h1>Category bearbeiten</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}">

        <button type="submit">Aktualisieren</button>
    </form>

    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Löschen</button>
    </form>
@endsection