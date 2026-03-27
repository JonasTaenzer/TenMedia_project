@extends('layouts.app')

@section('content')
    <h1>{{ $job->title }}</h1>

    <p><strong>Beschreibung:</strong> {{ $job->description }}</p>
    <p><strong>Ort:</strong> {{ $job->location }}</p>
    <p><strong>Gehalt:</strong> {{ $job->salary }}</p>
    <p><strong>Company:</strong> {{ $job->company->name ?? '-' }}</p>
    <p><strong>Category:</strong> {{ $job->category->name ?? '-' }}</p>

    <div class="action-links">
        <a href="{{ route('jobs.edit', $job) }}">Bearbeiten</a>
        <a href="{{ route('jobs.index') }}">Zurück</a>
    </div>
@endsection