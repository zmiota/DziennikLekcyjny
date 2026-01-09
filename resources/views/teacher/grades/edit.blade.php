@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-200">
                <div class="p-8 text-gray-900">
                    <h1 class="text-2xl font-bold mb-8 border-b pb-4">Edytuj ocenę</h1>

                    <form method="POST" action="{{ route('teacher.grades.update', $grade->id) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-500 mb-1">Uczeń</label>
                                <input type="text" value="{{ $grade->student->name }}" disabled
                                       class="border-gray-200 bg-gray-100 text-gray-500 rounded-md shadow-sm block w-full cursor-not-allowed">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-500 mb-1">Przedmiot</label>
                                <input type="text" value="{{ $grade->subject->name }}" disabled
                                       class="border-gray-200 bg-gray-100 text-gray-500 rounded-md shadow-sm block w-full cursor-not-allowed">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-1">Ocena</label>
                                <input type="number" name="value" min="1" max="6" value="{{ $grade->value }}" required
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full font-bold">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-1">Opis</label>
                                <input type="text" name="description" value="{{ $grade->description }}"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-4 mt-8 pt-4 border-t border-gray-100">
                            <a href="{{ route('teacher.grades.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">Anuluj</a>
                            <button type="submit" 
                                    class="inline-flex items-center px-6 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:opacity-90 transition shadow-sm"
                                    style="background-color: #eab308;">
                                Zaktualizuj ocenę
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection