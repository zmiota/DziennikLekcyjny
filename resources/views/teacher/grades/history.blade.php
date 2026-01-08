@extends('layouts.app')

@section('content')
<h1>Historia oceny: {{ $grade->student->name }} – {{ $grade->subject->name }}</h1>

<table>
    <thead>
        <tr>
            <th>Stara ocena</th>
            <th>Nowa ocena</th>
            <th>Kto zmienił</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        @foreach($histories as $h)
        <tr>
            <td>{{ $h->old_value ? $h->old_value : '-' }}</td>
            <td>{{ $h->new_value }}</td>
            <td>{{ $h->modifier->name }}</td>
            <td>{{ $h->created_at->format('d.m.Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('teacher.grades.index') }}">Wróć</a>
@endsection