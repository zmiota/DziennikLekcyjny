@extends('layouts.app')

@section('content')
    <div class="py-20 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="text-center mb-20">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">
                    Panel Nauczyciela
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Witaj, <span class="font-semibold text-indigo-600">{{ auth()->user()->name }}</span>! Zarządzaj ocenami swoich uczniów.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 px-4 sm:px-0 max-w-4xl mx-auto">

                <a href="{{ route('teacher.grades.index') }}" 
                   class="group bg-white rounded-3xl shadow-sm hover:shadow-2xl border border-gray-200 hover:border-indigo-500 p-10 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-2">
                    
                    <div class="w-28 h-28 rounded-full flex items-center justify-center transition-colors duration-300 mb-8 group-hover:bg-gray-900 group-hover:text-white"
                         style="background-color: #f3f4f6; color: #111827;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Dziennik Ocen</h3>
                    <p class="text-base text-gray-500 mb-10">Przeglądaj wystawione oceny i historię zmian.</p>
                    
                    <span class="mt-auto px-6 py-3 rounded-full text-sm font-bold bg-white border-2 border-gray-200 transition-all duration-300 group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-600"
                          style="color: #111827;">
                        Przeglądaj dziennik &rarr;
                    </span>
                </a>

                <a href="{{ route('teacher.grades.create') }}" 
                   class="group bg-white rounded-3xl shadow-sm hover:shadow-2xl border border-gray-200 hover:border-emerald-500 p-10 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-2">
                    
                    <div class="w-28 h-28 rounded-full flex items-center justify-center transition-colors duration-300 mb-8 group-hover:bg-gray-900 group-hover:text-white"
                         style="background-color: #f3f4f6; color: #111827;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Wystaw Ocenę</h3>
                    <p class="text-base text-gray-500 mb-10">Dodaj nową ocenę dla wybranego ucznia.</p>
                    
                    <span class="mt-auto px-6 py-3 rounded-full text-sm font-bold bg-white border-2 border-gray-200 transition-all duration-300 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600"
                          style="color: #111827;">
                        Rozpocznij &rarr;
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