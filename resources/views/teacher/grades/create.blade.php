@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">
                            Dodaj nowy element
                        </h2>
                        <p class="text-sm text-gray-600">
                            Uzupełnij poniższe dane, aby utworzyć nowy wpis.
                        </p>
                    </div>

                    <form method="POST" action="#" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nazwa
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Wpisz nazwę..."
                                   value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Opis
                            </label>
                            <textarea id="description" 
                                      name="description" 
                                      rows="4" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-100">
                            <a href="{{ url()->previous() }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                                Anuluj
                            </a>

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
@endsection