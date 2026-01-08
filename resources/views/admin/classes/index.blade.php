@extends('layouts.app')

@section('content')
<h1>Oddziały</h1>

<a href="{{ route('admin.classes.create') }}">Dodaj oddział</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nazwa</th>
            <th>Rok</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class->name }}</td>
                <td>{{ $class->year }}</td>
                <td>
                    <a href="{{ route('admin.classes.edit', $class) }}">Edytuj</a>
                    <form action="{{ route('admin.classes.destroy', $class) }}" method="POST" style="display:inline;">
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