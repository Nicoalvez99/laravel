<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Crear nuevo proyecto
        </h2>
    </x-slot>
    @include('partials.session-status')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="row">
                        <form action="{{ route('projects.store') }}" method="post">
                            @csrf
                            <div class="my-2">
                                <label for="txtTitulo">Titulo</label><br>
                                <input type="text" name="title" class="shadow appearance-none border w-1/3 rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="">
                            </div>
                            <div class="my-2">
                                <label for="txtTitulo">Descripcion</label><br>
                                <textarea type="text" name="description" class="shadow appearance-none border w-1/3 rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id=""></textarea>
                            </div>
                            <div class="my-2">
                                <label for="txtTitulo">URL</label><br>
                                <input type="text" name="url" class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="">
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-2 py-2 px-4 rounded">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>