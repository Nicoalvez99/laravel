<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Formulario de Edicion
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projects.update', $project) }}" method="post">
                        @csrf @method('patch')
                        <div class="col-4">
                            <label for="txtTitulo">Titulo</label><br>
                            <input type="text" name="title" class="shadow appearance-none border border-red-500 rounded w-1/3 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="" value="{{ old('title', $project->title) }}">
                        </div>
                        <div class="col-4">
                            <label for="txtDescripcion">Descripcion</label><br>
                            <textarea type="text" name="description" class="shadow appearance-none border border-red-500 rounded w-1/3 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="">{{ old('description', $project->description) }}</textarea>
                        </div>
                        <div class="col-4">
                            <label for="txtUrl">URL</label><br>
                            <input type="text" name="url" class="shadow appearance-none border border-red-500 rounded w-1/3 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="" value="{{ old('url', $project->url) }}">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                    </form>
                </div>

                <a href="{{ route('projects.index') }}">Regresar</a>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>