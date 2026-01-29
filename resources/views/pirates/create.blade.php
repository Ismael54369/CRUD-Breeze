<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Generar Nuevo Cartel</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                
                <form action="{{ route('pirates.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Nombre del Pirata</label>
                        <input type="text" name="name" class="w-full border-gray-300 rounded" required placeholder="Ej: Roronoa Zoro">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Tripulación</label>
                        <input type="text" name="crew" class="w-full border-gray-300 rounded" required placeholder="Ej: Sombrero de Paja">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Rol</label>
                        <select name="role" class="w-full border-gray-300 rounded">
                            <option>Capitán</option>
                            <option>Vicecapitán</option>
                            <option>Espadachín</option>
                            <option>Navegante</option>
                            <option>Cocinero</option>
                            <option>Médico</option>
                            <option>Francotirador</option>
                            <option>Arqueólogo</option>
                            <option>Carpintero</option>
                            <option>Músico</option>
                            <option>Timonel</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Recompensa (Berries)</label>
                        <input type="number" name="bounty" class="w-full border-gray-300 rounded" required min="0" placeholder="Ej: 320000000">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-1">Fecha del Cartel</label>
                        <input type="date" name="poster_date" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" name="has_fruit" id="fruit" class="w-5 h-5 text-indigo-600 rounded">
                        <label for="fruit" class="ml-2 text-gray-700 font-bold">¿Es usuario de Akuma no Mi?</label>
                    </div>

                    <button type="submit" class="w-full bg-red-700 hover:bg-red-800 text-white font-bold py-3 rounded uppercase tracking-wider">
                        Publicar Recompensa
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>