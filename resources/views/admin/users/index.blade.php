@extends('layouts.app')

@section('content')
<h1>Lista użytkowników</h1>
<a href="{{ route('admin.users.create') }}">Dodaj użytkownika</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('admin.users.show', $user->id) }}">Podgląd</a>
                <a href="{{ route('admin.users.edit', $user->id) }}">Edytuj</a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Na pewno chcesz usunąć?')">Usuń</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('admin.dashboard') }}">Wróć</a>
@endsection