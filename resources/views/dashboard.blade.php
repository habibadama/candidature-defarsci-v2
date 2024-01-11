<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-3xl mx-4 my-4">Les actions possibles</h3>
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <a href="{{ route('users') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des utilisateurs
                    </a>
                    <a href="{{ route('liste.candidat') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des candidature
                    </a>
                    <a href="{{ route('liste.module') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des modules
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
