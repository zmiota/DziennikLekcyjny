<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-200 py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <div class="mx-auto h-20 w-20 bg-indigo-600 rounded-full flex items-center justify-center text-white mb-6 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                Dziennik Lekcyjny
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Zaloguj się, aby uzyskać dostęp.
            </p>
        </div>

        <div class="max-w-lg w-full bg-white py-14 px-12 shadow-xl rounded-3xl border border-gray-100">
    
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Adres Email
                    </label>
                    <div class="relative">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                               class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm py-3 px-4" 
                               placeholder="email@szkola.pl">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Hasło
                    </label>
                    <div class="relative">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm py-3 px-4"
                               placeholder="••••••••">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" 
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Zapamiętaj mnie
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 hover:underline">
                                Zapomniałeś hasła?
                            </a>
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Zaloguj się
                    </button>
                </div>
            </form>
            
            @if (Route::has('register'))
                <div class="mt-6 text-center pt-6 border-t border-gray-100">
                    <p class="text-sm text-gray-600">
                        Nie masz konta? 
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 hover:underline">
                            Zarejestruj się
                        </a>
                    </p>
                </div>
            @endif
        </div>
        
        <div class="mt-10 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} Dziennik Lekcyjny
        </div>
    </div>
</x-guest-layout>