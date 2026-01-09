@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-200">
                <div class="p-8 text-gray-900">
                    <h1 class="text-2xl font-bold mb-8 border-b pb-4">Wystaw nową ocenę</h1>

                    <form method="POST" action="{{ route('teacher.grades.store') }}" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label class="block font-medium text-sm text-gray-700 mb-1">Uczeń</label>
                            <select name="student_id" id="student-select" required 
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                                <option value="">-- wybierz ucznia --</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">
                                        {{ $student->name }} ({{ $student->class->name ?? '-' }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700 mb-1">Przedmiot</label>
                            <select name="subject_id" id="subject-select" required disabled
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full bg-gray-50">
                                <option value="">-- przedmiot --</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-1">Ocena (1-6)</label>
                                <input type="number" name="value" min="1" max="6" required
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-1">Opis (opcjonalnie)</label>
                                <input type="text" name="description" placeholder="np. Sprawdzian"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-4 mt-8 pt-4 border-t border-gray-100">
                            <a href="{{ url()->previous() }}" class="text-sm text-gray-600 hover:text-gray-900 underline">Anuluj</a>
                            <button type="submit" 
                                    class="inline-flex items-center px-6 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:opacity-90 transition shadow-sm"
                                    style="background-color: #059669;">
                                Zapisz
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('student-select').addEventListener('change', function () {
            const studentId = this.value;
            const subjectSelect = document.getElementById('subject-select');

            subjectSelect.innerHTML = '';
            subjectSelect.disabled = true;
            subjectSelect.classList.add('bg-gray-50'); // Dodanie szarego tła gdy zablokowany

            if (!studentId) {
                subjectSelect.innerHTML = '<option value="">-- wybierz ucznia --</option>';
                return;
            }

            fetch(`/teacher/grades/student/${studentId}/subjects`)
                .then(response => response.json())
                .then(subjects => {
                    subjectSelect.innerHTML = '';

                    if (subjects.length === 0) {
                        subjectSelect.innerHTML = '<option value="">Brak dostępnych przedmiotów</option>';
                        return;
                    }

                    subjects.forEach(subject => {
                        const option = document.createElement('option');
                        option.value = subject.id;
                        option.textContent = subject.name;
                        subjectSelect.appendChild(option);
                    });

                    subjectSelect.disabled = false;
                    subjectSelect.classList.remove('bg-gray-50'); // Usunięcie szarego tła
                });
        });
    </script>
@endsection