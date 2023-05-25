<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>
    
    @include('partials.session-status')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><a href="{{ route('projects.create') }}">Nuevo proyecto</a></button>
            <div class="bg-white dark:bg-gray-800 mt-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($projects as $project)
                    <div class="flex my-2">
                        <div class="flex items-center w-1/3 bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"><a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a></h2>
                        </div>
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2"><a href="{{ route('projects.edit', $project) }}"> Editar</a></button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>