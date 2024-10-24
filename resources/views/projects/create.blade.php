@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white">
    <h1 class="text-2xl font-semibold mb-6 text-gray-800">Crear Nuevo Proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <!-- Nombre del Proyecto y Fuente de Fondos en Flexbox -->
        <div class="mb-4 flex space-x-4">
            <div class="flex-1">
                <label for="project_name" class="block text-sm font-medium text-gray-700">Nombre del Proyecto</label>
                <input type="text" id="project_name" name="project_name" required 
                       class="mt-1 block w-full p-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-500" 
                       placeholder="Ingresa el nombre del proyecto">
            </div>
            <div class="flex-1">
                <label for="funding_source" class="block text-sm font-medium text-gray-700">Fuente de Fondos</label>
                <input type="text" id="funding_source" name="funding_source" required 
                       class="mt-1 block w-full p-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-500" 
                       placeholder="Ingresa la fuente de fondos">
            </div>
        </div>

        <!-- Monto Planificado -->
        <div class="mb-4">
            <label for="planned_amount" class="block text-sm font-medium text-gray-700">Monto Planificado</label>
            <input type="number" id="planned_amount" name="planned_amount" step="0.01" required 
                   class="mt-1 block w-full p-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-500" 
                   placeholder="Ingresa el monto planificado" style="appearance: none; -moz-appearance: textfield;">
        </div>

        <!-- Monto Patrocinado -->
        <div class="mb-4">
            <label for="sponsored_amount" class="block text-sm font-medium text-gray-700">Monto Patrocinado</label>
            <input type="number" id="sponsored_amount" name="sponsored_amount" step="0.01" required 
                   class="mt-1 block w-full p-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-500" 
                   placeholder="Ingresa el monto patrocinado" style="appearance: none; -moz-appearance: textfield;">
        </div>

        <!-- Fondos Propios -->
        <div class="mb-4">
            <label for="own_funds" class="block text-sm font-medium text-gray-700">Monto Fondos Propios</label>
            <input type="number" id="own_funds" name="own_funds" step="0.01" required 
                   class="mt-1 block w-full p-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-500" 
                   placeholder="Ingresa los fondos propios" style="appearance: none; -moz-appearance: textfield;">
        </div>

        <div class="flex justify-between">
            <button type="button" onclick="window.location='{{ route('projects.index') }}'" class="w-1/2 text-black font-semibold py-2 border hover:bg-gray-100 transition duration-200">Cancelar</button>
            <button type="submit" class="w-1/2 ml-2 bg-green-400 text-black font-semibold py-2 hover:bg-green-500 transition duration-200">Crear Proyecto</button>
        </div>
    </form>
</div>
@endsection
