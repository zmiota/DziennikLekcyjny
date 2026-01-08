@extends('layouts.app')

@section('content')
<h1>Przedmioty</h1>
<a href="{{ route('admin.subjects.create') }}">Dodaj przedmiot</a>

<table>
    <thead>
        <tr>
            <th>Nazwa</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->name }}</td>
                <td>
                    <a href="{{ route('admin.subjects.edit', $subject) }}">Edytuj</a>
                    <form action="{{ route('admin.subjects.destroy', $subject) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Na pewno usunąć?')">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('admin.dashboard') }}">Wróć</a>
@endsection