@extends('layouts.app')

@section('content')
    <div class="py-20 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="text-center mb-20">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">
                    Panel Ucznia
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Witaj, <span class="font-semibold text-indigo-600">{{ auth()->user()->name }}</span>! Sprawdź swoje postępy w nauce.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 px-4 sm:px-0 max-w-4xl mx-auto">

                <a href="{{ route('student.grades.index') }}" 
                   class="group bg-white rounded-3xl shadow-sm hover:shadow-2xl border border-gray-200 hover:border-blue-500 p-10 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-2">
                    
                    <div class="w-28 h-28 rounded-full flex items-center justify-center transition-colors duration-300 mb-8 group-hover:bg-gray-900 group-hover:text-white"
                         style="background-color: #f3f4f6; color: #111827;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Moje Oceny</h3>
                    <p class="text-base text-gray-500 mb-10">Zobacz aktualne oceny ze wszystkich przedmiotów.</p>
                    
                    <span class="mt-auto px-6 py-3 rounded-full text-sm font-bold bg-white border-2 border-gray-200 transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-600"
                          style="color: #111827;">
                        Sprawdź oceny &rarr;
                    </span>
                </a>

                <a href="{{ route('student.grades.history') }}" 
                   class="group bg-white rounded-3xl shadow-sm hover:shadow-2xl border border-gray-200 hover:border-purple-500 p-10 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-2">
                    
                    <div class="w-28 h-28 rounded-full flex items-center justify-center transition-colors duration-300 mb-8 group-hover:bg-gray-900 group-hover:text-white"
                         style="background-color: #f3f4f6; color: #111827;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Historia Ocen</h3>
                    <p class="text-base text-gray-500 mb-10">Sprawdź historię zmian i poprawy stopni.</p>
                    
                    <span class="mt-auto px-6 py-3 rounded-full text-sm font-bold bg-white border-2 border-gray-200 transition-all duration-300 group-hover:bg-purple-600 group-hover:text-white group-hover:border-purple-600"
                          style="color: #111827;">
                        Zobacz historię &rarr;
                    </span>
                </a>

            </div>
            
            <div class="mt-20 text-center">
                 <div class="inline-flex items-center p-1 rounded-full border bg-white shadow-sm">
                    <span class="px-3 py-1 text-xs text-gray-400 font-medium">System gotowy do pracy</span>
                 </div>
            </div>

        </div>
    </div>
@endsection