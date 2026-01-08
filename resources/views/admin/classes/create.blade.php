@extends('layouts.app')

@section('content')
<h1>Dodaj oddział</h1>

<form action="{{ route('admin.classes.store') }}" method="POST">
    @csrf
    <div>
        <label>Nazwa oddziału</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required maxlength="10">
    </div>
    <div>
        <label>Rok</label><br>
        <input type="text" name="year" value="{{ old('year') }}" required maxlength="9">
    </div>
    <br>
    <button type="submit">Zapisz</button>
    <a href="{{ url()->previous() }}">Anuluj</a>
</form>
@endsection
