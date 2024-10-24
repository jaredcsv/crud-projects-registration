@extends('layouts.app')

@section('content')
<div class="container mt-6 px-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-semibold">Proyectos</h1>
        <a href="{{ route('projects.create') }}" class="text-gray-900 hover:text-black bg-gray-200 hover:bg-gray-300 font-bold py-2 px-4 shadow transition duration-200 ease-in-out">+ Nuevo Proyecto</a>
    </div>
    
    <div class="overflow-x-auto bg-white">
        <table class="min-w-full">
            <thead class="bg-gray-200 text-black">
                <tr>
                    <th class="py-3 px-4 text-left font-semibold">Id</th>
                    <th class="py-3 px-4 text-left font-semibold">Nombre del Proyecto</th>
                    <th class="py-3 px-4 text-left font-semibold">Fuente de Fondos</th>
                    <th class="py-3 px-4 text-left font-semibold">Monto Planificado</th>
                    <th class="py-3 px-4 text-left font-semibold">Monto Patrocinado</th>
                    <th class="py-3 px-4 text-left font-semibold">Monto Fondos Propios </th>
                    <th class="py-3 px-4 text-left font-semibold"></th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($projects as $project)
                <tr class="border-b hover:bg-gray-50 transition duration-200">
                    <td class="py-3 px-4">{{ $project->id }}</td>
                    <td class="py-3 px-4 font-medium">{{ $project->project_name }}</td>
                    <td class="py-3 px-4">{{ $project->funding_source }}</td>
                    <td class="py-3 px-4">${{ number_format($project->planned_amount, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($project->sponsored_amount, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($project->own_funds, 2) }}</td>
                    <td class="py-3 px-4 flex space-x-1">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-gray-800 hover:text-black font-bold py-1 px-2 transition duration-200 ease-in-out">Ver</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="text-gray-800 hover:text-black font-bold py-1 px-2 transition duration-200 ease-in-out">Editar</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-800 font-bold py-1 px-2 transition duration-200 ease-in-out">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="mt-4">
        {{ $projects->links() }}
    </div>
</div>
@endsection
