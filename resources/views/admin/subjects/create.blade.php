@extends('layouts.app')

@section('content')
<h1>Dodaj przedmiot</h1>

<form action="{{ route('admin.subjects.store') }}" method="POST">
    @csrf

    <label>Nazwa</label><br>
    <input type="text" name="name" value="" required><br><br>

    <button type="submit">Zapisz</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection