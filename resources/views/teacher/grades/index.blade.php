@extends('layouts.app')

@section('content')
<h1>Lista wystawionych ocen</h1>

<a href="{{ route('teacher.grades.create') }}">Dodaj ocenę</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Uczeń</th>
            <th>Przedmiot</th>
            <th>Ocena</th>
            <th>Opis</th>
            <th>Data</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
    @foreach($grades as $grade)
        <tr>
            <td>{{ $grade->id }}</td>
            <td>{{ $grade->student->name }}</td>
            <td>{{ $grade->subject->name }}</td>
            <td>{{ $grade->value }}</td>
            <td>{{ $grade->description ?? '-' }}</td>
            <td>{{ $grade->created_at->format('Y-m-d') }}</td>
            <td>
                <a href="{{ route('teacher.grades.edit', $grade->id) }}">Edytuj</a>
                <form action="{{ route('teacher.grades.destroy', $grade->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Na pewno chcesz usunąć?')">Usuń</button>
                </form>
                <a href="{{ route('teacher.grades.history', $grade->id) }}">Historia</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('teacher.dashboard') }}">Wróć</a>
@endsection