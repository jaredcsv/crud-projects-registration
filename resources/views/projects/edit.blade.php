@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Editar Proyecto</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST"
        class="bg-white px-8 pt-6 pb-8 mb-4 mx-auto max-w-lg">
        @csrf
        @method('PATCH')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="project_name" class="block text-gray-700 text-sm font-semibold mb-2">Nombre del Proyecto</label>
                <input type="text" id="project_name" name="project_name"
                    class="appearance-none border border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500"
                    value="{{ $project->project_name }}" required>
            </div>

            <div class="mb-4">
                <label for="funding_source" class="block text-gray-700 text-sm font-semibold mb-2">Fuente de Fondos</label>
                <input type="text" id="funding_source" name="funding_source"
                    class="appearance-none border border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500"
                    value="{{ $project->funding_source }}" required>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="planned_amount" class="block text-gray-700 text-sm font-semibold mb-2">Monto Planificado</label>
                <input type="number" id="planned_amount" name="planned_amount" step="0.01"
                    class="appearance-none border border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500"
                    value="{{ $project->planned_amount }}" required style="appearance: none; -moz-appearance: textfield;">
            </div>

            <div class="mb-4">
                <label for="sponsored_amount" class="block text-gray-700 text-sm font-semibold mb-2">Monto Patrocinado </label>
                <input type="number" id="sponsored_amount" name="sponsored_amount" step="0.01"
                    class="appearance-none border border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500"
                    value="{{ $project->sponsored_amount }}" required style="appearance: none; -moz-appearance: textfield;">
            </div>
        </div>

        <div class="mb-4">
            <label for="own_funds" class="block text-gray-700 text-sm font-semibold mb-2">Monto Fondos Propios</label>
            <input type="number" id="own_funds" name="own_funds" step="0.01"
                class="appearance-none border border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500"
                value="{{ $project->own_funds }}" required style="appearance: none; -moz-appearance: textfield;">
        </div>

        <div class="flex items-center justify-center mt-6 space-x-4">
            <a href="{{ route('projects.index') }}"
                class="hover:bg-gray-100 text-black border font-bold py-2 px-6 focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                Cancelar
            </a>
            <button type="submit"
                class="bg-green-400 hover:bg-green-500 text-black font-bold py-2 px-6 focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection