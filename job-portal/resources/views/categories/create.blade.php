@extends('layouts.app')

@section('content')
    <h1>Category erstellen</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <button type="submit">Speichern</button>
    </form>
@endsection