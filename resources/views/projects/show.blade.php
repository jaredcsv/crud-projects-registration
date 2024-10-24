@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 max-w-4xl">
    <div class="flex items-center justify-between py-2">
        <div class="mt-4">
            <h1 class="text-4xl font-bold text-gray-800">{{ $project->project_name }}</h1>
            <span class="text-m text-gray-600">Id: {{ $project->id }}</span>
        </div>
        <div>
            <a href="{{route('projects.pdf', $project->id)}}">Descargar</a>
        </div>
    </div>

    <div class="bg-white p-6 justify-center mt-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div>
                <p class="text-sm text-gray-600">Fuente de Fondos:</p>
                <p class="text-lg text-gray-800">{{ $project->funding_source }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Monto Planificado:</p>
                <p class="text-lg text-gray-800">${{ number_format($project->planned_amount, 2) }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Monto Patrocinado:</p>
                <p class="text-lg text-gray-800">${{ number_format($project->sponsored_amount, 2) }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Monto Fondos Propios:</p>
                <p class="text-lg text-gray-800">${{ number_format($project->own_funds, 2) }}</p>
            </div>
        </div>

        <div class="mt-2 flex justify-center space-x-4">
            <a href="{{ route('projects.index') }}"
                class="text-black bg-white hover:bg-gray-100 font-bold border py-2 px-4 transition duration-200">Atrás</a>
            <a href="{{ route('projects.edit', $project->id) }}"
                class="text-black bg-white hover:bg-gray-100 font-bold border py-2 px-4 transition duration-200">Editar</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="text-red-500 bg-white hover:bg-gray-100 hover:text-red-700 font-bold border py-2 px-4 transition duration-200">Eliminar</button>
            </form>
        </div>
    </div>

</div>
@endsection