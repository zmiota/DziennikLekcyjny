@extends('layouts.app')

@section('content')
<h1>Edytuj ocenę</h1>

<form method="POST" action="{{ route('teacher.grades.update', $grade->id) }}">
    @csrf
    @method('PUT')

    <label>Uczeń</label>
    <input type="text" value="{{ $grade->student->name }}" disabled>

    <label>Przedmiot</label>
    <input type="text" value="{{ $grade->subject->name }}" disabled>

    <label>Ocena</label>
    <input type="number" name="value" min="1" max="6" value="{{ $grade->value }}" required>

    <label>Opis</label>
    <input type="text" name="description" value="{{ $grade->description }}">

    <button type="submit">Zaktualizuj ocenę</button>
    <a href="{{ route('teacher.grades.index') }}">Wróć</a>
</form>
@endsection