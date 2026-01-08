@extends('layouts.app')

@section('content')
<h1>Panel ucznia</h1>

<p>Witaj, {{ auth()->user()->name }}</p>

<ul>
    <li>
        <a href="{{ route('student.grades.index') }}">
            Oceny
        </a>
    </li>
    <li>
        <a href="{{ route('student.grades.history') }}">
            Historia ocen
        </a>
    </li>
</ul>
@endsection