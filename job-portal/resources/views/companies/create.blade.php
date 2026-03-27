@extends('layouts.app')

@section('content')
    <h1>Company erstellen</h1>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label>Website</label>
        <input type="text" name="website" value="{{ old('website') }}">

        <label>Beschreibung</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <button type="submit">Speichern</button>
    </form>
@endsection