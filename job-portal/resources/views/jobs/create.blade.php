@extends('layouts.app')

@section('content')
    <h1>Job erstellen</h1>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <label>Titel</label>
        <input type="text" name="title" value="{{ old('title') }}">

        <label>Beschreibung</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label>Ort</label>
        <input type="text" name="location" value="{{ old('location') }}">

        <label>Gehalt</label>
        <input type="number" name="salary" value="{{ old('salary') }}">

        <label>Company</label>
        <select name="company_id">
            <option value="">Bitte wählen</option>
            @foreach($companies as $company)
                <option value="{{ $company->id }}" @selected(old('company_id') == $company->id)>
                    {{ $company->name }}
                </option>
            @endforeach
        </select>

        <label>Category</label>
        <select name="category_id">
            <option value="">Bitte wählen</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Speichern</button>
    </form>
@endsection