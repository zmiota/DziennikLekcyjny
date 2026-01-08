@extends('layouts.app')

@section('content')
<h1>Edytuj użytkownika</h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.users.update', $user->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Imię</label><br>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
    </div>

    <div>
        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
    </div>

    <div>
        <label>Nowe hasło (opcjonalnie)</label><br>
        <input type="password" name="password">
    </div>

    <div>
        <label>Potwierdź hasło</label><br>
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <label>Rola</label><br>
        <select name="role" required>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="teacher" {{ $user->role === 'teacher' ? 'selected' : '' }}>Teacher</option>
            <option value="student" {{ $user->role === 'student' ? 'selected' : '' }}>Student</option>
        </select>
    </div>

    <div>
        <label>Klasa</label><br>
        <select name="class_id">
            <option value="">— brak —</option>
            @foreach($classes as $class)
                <option value="{{ $class->id }}" 
                    {{ old('class_id', $user->class_id) == $class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Przedmioty</label><br>
        <select name="subjects[]" multiple size="5">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}"
                    {{ in_array($subject->id, old('subjects', $user->subjects->pluck('id')->toArray())) ? 'selected' : '' }}>
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <button type="submit">Zapisz zmiany</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection