@extends('layouts.app')

@section('content')
<h1>Historia moich ocen</h1>

@foreach($grades as $grade)
    <h3>{{ $grade->subject->name }}</h3>
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
            @foreach($grade->histories as $h)
            <tr>
                <td>{{ $h->old_value ? $h->old_value : '-' }}</td>
                <td>{{ $h->new_value }}</td>
                <td>{{ $h->modifier->name }}</td>
                <td>{{ $h->created_at->format('d.m.Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
<a href="{{ route('student.dashboard') }}">Wróć</a>
@endsection