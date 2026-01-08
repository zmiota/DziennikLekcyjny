@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg overflow-hidden border border-gray-200">
                
                <div class="px-6 py-5 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                    <h3 class="text-xl leading-6 font-bold text-gray-900">
                        Profil Użytkownika
                    </h3>
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-widest text-white"
                          style="background-color: {{ $user->role === 'admin' ? '#ef4444' : ($user->role === 'teacher' ? '#10b981' : '#3b82f6') }};">
                        {{ $user->role }}
                    </span>
                </div>

                <div class="p-6">
                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        
                        <div class="col-span-1">
                            <dt class="text-sm font-medium text-gray-500 uppercase tracking-wider">Imię i Nazwisko</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2">
                                {{ $user->name }}
                            </dd>
                        </div>

                        <div class="col-span-1">
                            <dt class="text-sm font-medium text-gray-500 uppercase tracking-wider">Adres Email</dt>
                            <dd class="mt-1 text-lg font-mono text-gray-700 border-b border-gray-100 pb-2">
                                {{ $user->email }}
                            </dd>
                        </div>

                        <div class="col-span-1">
                            <dt class="text-sm font-medium text-gray-500 uppercase tracking-wider">Przypisana Klasa</dt>
                            <dd class="mt-1 text-base text-gray-900">
                                @if($user->class)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-indigo-100 text-indigo-800">
                                        {{ $user->class->name }}
                                    </span>
                                @else
                                    <span class="text-gray-400 italic">Brak przypisanej klasy</span>
                                @endif
                            </dd>
                        </div>

                        <div class="col-span-1">
                            <dt class="text-sm font-medium text-gray-500 uppercase tracking-wider">Data rejestracji</dt>
                            <dd class="mt-1 text-base text-gray-900">
                                {{ $user->created_at->format('d.m.Y H:i') }}
                            </dd>
                        </div>

                        <div class="col-span-1 md:col-span-2 mt-4">
                            <dt class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Przypisane przedmioty</dt>
                            <dd class="p-4 bg-gray-50 rounded-lg border border-gray-100">
                                @if($user->subjects->count() > 0)
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($user->subjects as $subject)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white border border-gray-300 text-gray-700 shadow-sm">
                                                {{ $subject->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-gray-500 italic">Ten użytkownik nie ma przypisanych żadnych przedmiotów.</span>
                                @endif
                            </dd>
                        </div>

                    </dl>
                </div>

                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end gap-3">
                    <a href="{{ route('admin.users.index') }}" 
                       class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                        Wróć do listy
                    </a>
                    <a href="{{ route('admin.users.edit', $user->id) }}" 
                       class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition"
                       style="background-color: #eab308;">
                        Edytuj profil
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection