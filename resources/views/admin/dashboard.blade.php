@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-gray-800">Panel Administratora</h1>
                    <p class="mt-2 text-gray-600">
                        Witaj, <span class="font-semibold text-indigo-600">{{ auth()->user()->name }}</span>! Wybierz moduł, którym chcesz zarządzać.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <a href="{{ route('admin.users.index') }}" class="group block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition duration-300 ease-in-out border-l-4 border-blue-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 bg-blue-100 rounded-full text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Użytkownicy</h3>
                            <p class="text-sm text-gray-500">Zarządzanie kontami</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('admin.subjects.index') }}" class="group block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition duration-300 ease-in-out border-l-4 border-purple-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 bg-purple-100 rounded-full text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-purple-600">Przedmioty</h3>
                            <p class="text-sm text-gray-500">Lista przedmiotów</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('admin.classes.index') }}" class="group block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition duration-300 ease-in-out border-l-4 border-emerald-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 bg-emerald-100 rounded-full text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-emerald-600">Oddziały</h3>
                            <p class="text-sm text-gray-500">Zarządzanie klasami</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection