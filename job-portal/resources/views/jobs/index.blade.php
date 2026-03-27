@extends('layouts.app')

@section('content')
    <h1>Jobs</h1>

    <a href="{{ route('jobs.create') }}">Neuen Job erstellen</a>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a>
                - {{ $job->company->name ?? 'Keine Company' }}
                - {{ $job->category->name ?? 'Keine Category' }}
                - <a href="{{ route('jobs.edit', $job) }}">Bearbeiten</a>
            </li>
        @endforeach
    </ul>
@endsection