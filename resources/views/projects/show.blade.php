<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $project->title }}
        </h2>
    </x-slot>
    @include('partials.session-status')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <form action="{{ route('projects.destroy', $project) }}" method="post"> <!-- a la ruta projects.destroy le paso como parametro el proyecto asi va toda la info por ahi  -->
                @csrf @method('DELETE')
                <button class="bg-blue-500 hover:bg-blue-700 text-white my-2 font-bold py-2 px-4 rounded">Eliminar</button>
            </form>
        </div>
    </div>
</x-app-layout>