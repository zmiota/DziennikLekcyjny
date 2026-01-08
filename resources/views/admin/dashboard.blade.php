@extends('layouts.app')

@section('content')
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">
                    Panel Administratora
                </h1>
                <p class="mt-2 text-lg text-gray-600">
                    Witaj, <span class="font-semibold text-indigo-600">{{ auth()->user()->name }}</span>! Czym chcesz się dzisiaj zająć?
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4 sm:px-0">

                <a href="{{ route('admin.users.index') }}" 
                   class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 hover:border-purple-100 p-8 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-1">
                    
                    <div class="w-20 h-20 rounded-full flex items-center justify-center bg-purple-50 text-purple-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">Użytkownicy</h3>
                    <p class="text-sm text-gray-500 mt-2 mb-6">Nauczyciele, Uczniowie, Admini</p>
                    
                    <span class="mt-auto px-4 py-2 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 group-hover:bg-indigo-100 transition-colors">
                        Zarządzaj kontami &rarr;
                    </span>
                </a>

                <a href="{{ route('admin.subjects.index') }}" 
                   class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 hover:border-purple-100 p-8 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-1">
                    
                    <div class="w-20 h-20 rounded-full flex items-center justify-center bg-purple-50 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">Przedmioty</h3>
                    <p class="text-sm text-gray-500 mt-2 mb-6">Matematyka, Polski, Historia...</p>
                    
                    <span class="mt-auto px-4 py-2 rounded-full text-xs font-semibold bg-purple-50 text-purple-700 group-hover:bg-purple-100 transition-colors">
                        Edytuj listę &rarr;
                    </span>
                </a>

                <a href="{{ route('admin.classes.index') }}" 
                   class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 hover:border-emerald-100 p-8 flex flex-col items-center text-center transition-all duration-300 transform hover:-translate-y-1">
                    
                    <div class="w-20 h-20 rounded-full flex items-center justify-center bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-emerald-600 transition-colors">Oddziały</h3>
                    <p class="text-sm text-gray-500 mt-2 mb-6">Klasy, Roczniki, Grupy</p>
                    
                    <span class="mt-auto px-4 py-2 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 group-hover:bg-emerald-100 transition-colors">
                        Przeglądaj &rarr;
                    </span>
                </a>

            </div>
            
            <div class="mt-12 text-center">
                 <div class="inline-flex items-center p-1 rounded-full border bg-white shadow-sm">
                    <span class="px-3 py-1 text-xs text-gray-400 font-medium">System gotowy do pracy</span>
                 </div>
            </div>

        </div>
    </div>
@endsection