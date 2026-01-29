<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Recompensa</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                
                <form action="{{ route('pirates.update', $pirate->id) }}" method="POST">
                    @csrf @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Nombre</label>
                        <input type="text" name="name" value="{{ $pirate->name }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Tripulación</label>
                        <input type="text" name="crew" value="{{ $pirate->crew }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Rol</label>
                        <select name="role" class="w-full border-gray-300 rounded">
                            @foreach(['Capitán', 'Vicecapitán', 'Espadachín', 'Navegante', 'Cocinero', 'Médico', 'Francotirador', 'Arqueólogo', 'Carpintero', 'Músico', 'Timonel'] as $rol)
                                <option value="{{ $rol }}" {{ $pirate->role == $rol ? 'selected' : '' }}>{{ $rol }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Recompensa (Berries)</label>
                        <input type="number" name="bounty" value="{{ $pirate->bounty }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Fecha</label>
                        <input type="date" name="poster_date" value="{{ $pirate->poster_date }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" name="has_fruit" id="fruit" {{ $pirate->has_fruit ? 'checked' : '' }} class="w-5 h-5 text-indigo-600 rounded">
                        <label for="fruit" class="ml-2 text-gray-700 font-bold">¿Es usuario de Akuma no Mi?</label>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded">
                        Actualizar Datos
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>