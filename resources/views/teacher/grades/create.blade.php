@extends('layouts.app')

@section('content')
<h1>Wystaw ocenę</h1>

<form method="POST" action="{{ route('teacher.grades.store') }}">
    @csrf
    
    <label>Uczeń</label>
    <select name="student_id" id="student-select" required>
        <option value="">-- wybierz ucznia --</option>
        @foreach($students as $student)
            <option value="{{ $student->id }}">
                {{ $student->name }} ({{ $student->class->name ?? '-' }})
            </option>
        @endforeach
    </select>

    <label>Przedmiot</label>
    <select name="subject_id" id="subject-select" required disabled>
        <option value="">-- przedmiot --</option>
    </select>

    <label>Ocena</label>
    <input type="number" name="value" min="1" max="6" required>

    <label>Opis</label>
    <input type="text" name="description">

    <button type="submit">Zapisz</button>
    <a href="{{ url()->previous() }}">Wróć</a>
</form>
<script>
    document.getElementById('student-select').addEventListener('change', function () {
        const studentId = this.value;
        const subjectSelect = document.getElementById('subject-select');

        subjectSelect.innerHTML = '';
        subjectSelect.disabled = true;

        if (!studentId) {
            subjectSelect.innerHTML = '<option value="">-- wybierz ucznia --</option>';
            return;
        }

        fetch(`/teacher/grades/student/${studentId}/subjects`)
            .then(response => response.json())
            .then(subjects => {
                subjectSelect.innerHTML = '';

                if (subjects.length === 0) {
                    subjectSelect.innerHTML =
                        '<option value="">Brak dostępnych przedmiotów</option>';
                    return;
                }

                subjects.forEach(subject => {
                    const option = document.createElement('option');
                    option.value = subject.id;
                    option.textContent = subject.name;
                    subjectSelect.appendChild(option);
                });

                subjectSelect.disabled = false;
            });
    });
</script>
@endsection