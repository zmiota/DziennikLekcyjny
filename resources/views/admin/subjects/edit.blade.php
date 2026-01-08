@extends('layouts.app')

@section('content')
<h1>Edytuj przedmiot</h1>

<form action="{{ route('admin.subjects.update', $subject) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nazwa</label><br>
    <input type="text" name="name" value="{{ old('name', $subject->name ?? '') }}" required><br><br>

    <button type="submit">Zapisz</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection