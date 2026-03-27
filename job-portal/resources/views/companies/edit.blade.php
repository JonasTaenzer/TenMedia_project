@extends('layouts.app')

@section('content')
    <h1>Company bearbeiten</h1>

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $company->name) }}">

        <label>Website</label>
        <input type="text" name="website" value="{{ old('website', $company->website) }}">

        <label>Beschreibung</label>
        <textarea name="description">{{ old('description', $company->description) }}</textarea>

        <button type="submit">Aktualisieren</button>
    </form>

    <form action="{{ route('companies.destroy', $company) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Löschen</button>
    </form>
@endsection