@extends('layouts.app')

@section('content')
<h1>Moje oceny</h1>

<table>
    <thead>
        <tr>
            <th>Przedmiot</th>
            <th>Ocena</th>
            <th>Nauczyciel</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grades as $grade)
        <tr>
            <td>{{ $grade->subject->name }}</td>
            <td>{{ $grade->value }}</td>
            <td>{{ $grade->teacher->name }}</td>
            <td>{{ $grade->created_at->format('d.m.Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('student.dashboard') }}">Wróć</a>
@endsection