@extends('layouts.app')

@section('content')
    <h1>Companies</h1>

    <a href="{{ route('companies.create') }}">Neue Company erstellen</a>

    <ul>
        @foreach($companies as $company)
            <li>
                <a href="{{ route('companies.show', $company) }}">{{ $company->name }}</a>
                - <a href="{{ route('companies.edit', $company) }}">Bearbeiten</a>
            </li>
        @endforeach
    </ul>
@endsection