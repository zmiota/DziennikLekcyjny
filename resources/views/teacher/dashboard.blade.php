@extends('layouts.app')

@section('content')
<h1>Panel nauczyciela</h1>

<p>Witaj, {{ auth()->user()->name }}</p>

<ul>
    <li>
        <a href="{{ route('teacher.grades.index') }}">
            Lista ocen
        </a>
    </li>
    <li>
        <a href="{{ route('teacher.grades.create') }}">
            Wystaw ocenę
        </a>
    </li>
</ul>
@endsection