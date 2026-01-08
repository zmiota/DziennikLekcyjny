@extends('layouts.app')

@section('content')
<h1>Dodaj użytkownika</h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    <div>
        <label>Imię</label><br>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Email</label><br>
        <input type="email" name="email" required autocomplete="off">
    </div>

    <div>
        <label>Hasło</label><br>
        <input type="password" name="password" required autocomplete="off">
    </div>

    <div>
        <label>Potwierdź hasło</label><br>
        <input type="password" name="password_confirmation" required>
    </div>

    <div>
        <label>Rola</label><br>
        <select name="role" required>
            <option value="">-- wybierz --</option>
            <option value="admin">Admin</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select>
    </div>

    <div>
        <label>Klasa</label><br>
        <select name="class_id">
            <option value="">— brak —</option>
            @foreach($classes as $class)
                <option value="{{ $class->id }}" >
                    {{ $class->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Przedmioty</label><br>
        <select name="subjects[]" multiple size="5">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <button type="submit">Zapisz</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection