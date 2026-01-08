@extends('layouts.app')

@section('content')
<h1>Edytuj oddział</h1>

<form action="{{ route('admin.classes.update', $class) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Nazwa oddziału</label><br>
        <input type="text" name="name" value="{{ old('name', $class->name) }}" required maxlength="10">
    </div>
    <div>
        <label>Rok</label><br>
        <input type="text" name="year" value="{{ old('year', $class->year) }}" required maxlength="9">
    </div>
    <br>
    <button type="submit">Zapisz zmiany</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection