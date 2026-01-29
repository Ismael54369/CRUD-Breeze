<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ☠️ Tablón de Recompensas (Wanted)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('pirates.create') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block shadow-md">
                + Nuevo Cartel "WANTED"
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="min-w-full border-collapse table-auto">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="p-3 text-left">Nombre</th>
                                <th class="p-3 text-left">Banda</th>
                                <th class="p-3 text-left">Rol</th>
                                <th class="p-3 text-right">Recompensa (฿)</th>
                                <th class="p-3 text-center">Akuma no Mi</th>
                                <th class="p-3 text-center">Fecha Cartel</th>
                                <th class="p-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pirates as $pirate)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3 font-bold">{{ $pirate->name }}</td>
                                <td class="p-3">{{ $pirate->crew }}</td>
                                <td class="p-3 text-sm text-gray-600">{{ $pirate->role }}</td>
                                <td class="p-3 text-right font-mono text-yellow-700 font-bold">
                                    {{ number_format($pirate->bounty, 0, ',', '.') }} ฿
                                </td>
                                <td class="p-3 text-center">
                                    @if($pirate->has_fruit)
                                        <span class="bg-purple-200 text-purple-800 py-1 px-2 rounded-full text-xs font-bold">USUARIO</span>
                                    @else
                                        <span class="bg-gray-200 text-gray-600 py-1 px-2 rounded-full text-xs">NO</span>
                                    @endif
                                </td>
                                <td class="p-3 text-center text-sm">{{ \Carbon\Carbon::parse($pirate->poster_date)->format('d/m/Y') }}</td>
                                <td class="p-3 text-center flex justify-center space-x-2">
                                    <a href="{{ route('pirates.edit', $pirate->id) }}" class="text-blue-600 font-bold hover:underline">Editar</a>
                                    <form action="{{ route('pirates.destroy', $pirate->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600 font-bold hover:underline" onclick="return confirm('¿Capturar a este pirata?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>