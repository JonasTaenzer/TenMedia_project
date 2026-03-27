@extends('layouts.app')

@section('content')
    <h1>Job bearbeiten</h1>

    <form action="{{ route('jobs.update', $job) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Titel</label>
        <input type="text" name="title" value="{{ old('title', $job->title) }}">

        <label>Beschreibung</label>
        <textarea name="description">{{ old('description', $job->description) }}</textarea>

        <label>Ort</label>
        <input type="text" name="location" value="{{ old('location', $job->location) }}">

        <label>Gehalt</label>
        <input type="number" name="salary" value="{{ old('salary', $job->salary) }}">

        <label>Company</label>
        <select name="company_id">
            @foreach($companies as $company)
                <option value="{{ $company->id }}" @selected(old('company_id', $job->company_id) == $company->id)>
                    {{ $company->name }}
                </option>
            @endforeach
        </select>

        <label>Category</label>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $job->category_id) == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Aktualisieren</button>
    </form>

    <form action="{{ route('jobs.destroy', $job) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Löschen</button>
    </form>
@endsection