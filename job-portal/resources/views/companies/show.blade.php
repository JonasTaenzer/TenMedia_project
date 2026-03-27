@extends('layouts.app')

@section('content')
    <h1>{{ $company->name }}</h1>

    <p><strong>Website:</strong> {{ $company->website }}</p>
    <p><strong>Beschreibung:</strong> {{ $company->description }}</p>

    <div class="action-links">
        <a href="{{ route('companies.edit', $company) }}">Bearbeiten</a>
        <a href="{{ route('companies.index') }}">Zurück</a>
    </div>
@endsection