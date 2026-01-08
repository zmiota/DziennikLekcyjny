@extends('layouts.app')

@section('content')
<h1>Szczegóły użytkownika</h1>

<table>
    <tr>
        <th>ID</th>
        <td>{{ $user->id }}</td>
    </tr>
    <tr>
        <th>Imię</th>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <th>Rola</th>
        <td>{{ ucfirst($user->role) }}</td>
    </tr>
    <tr>
        <th>Klasa</th>
        <td>{{ $user->class ? $user->class->name : '-' }}</td>
    </tr>
    <tr>
        <th>Przedmioty</th>
        <td>
            @if($user->subjects->count() > 0)
                <ul>
                    @foreach($user->subjects as $subject)
                        <li>{{ $subject->name }}</li>
                    @endforeach
                </ul>
            @else
                -
            @endif
        </td>
    </tr>
    <tr>
        <th>Utworzony</th>
        <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
    </tr>
    <tr>
        <th>Ostatnia aktualizacja</th>
        <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
    </tr>
</table>

<br>

<a href="{{ route('admin.users.edit', $user->id) }}">Edytuj</a>
<a href="{{ route('admin.users.index') }}">Wróć</a>
@endsection