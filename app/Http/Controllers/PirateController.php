<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pirate;

class PirateController extends Controller
{
    public function index()
    {
        $pirates = Pirate::all();
        return view('pirates.index', compact('pirates'));
    }

    public function create()
    {
        return view('pirates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'crew' => 'required|string|max:255',
            'role' => 'required',
            'bounty' => 'required|numeric|min:0',
            'poster_date' => 'required|date',
        ]);

        // Crear el pirata (el booleano requiere un truco)
        $pirateData = $request->all();
        // Si el checkbox 'has_fruit' viene marcado será '1' o 'on', si no, forzamos a 0
        $pirateData['has_fruit'] = $request->has('has_fruit');

        Pirate::create($pirateData);

        return redirect()->route('pirates.index')->with('success', '¡Se busca nuevo pirata!');
    }

    public function edit(Pirate $pirate)
    {
        return view('pirates.edit', compact('pirate'));
    }

    public function update(Request $request, Pirate $pirate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'crew' => 'required|string|max:255',
            'role' => 'required',
            'bounty' => 'required|numeric|min:0',
            'poster_date' => 'required|date',
        ]);

        $pirateData = $request->all();
        $pirateData['has_fruit'] = $request->has('has_fruit');

        $pirate->update($pirateData);

        return redirect()->route('pirates.index')->with('success', 'Cartel de recompensa actualizado.');
    }

    public function destroy(Pirate $pirate)
    {
        $pirate->delete();
        return redirect()->route('pirates.index')->with('success', 'Pirata capturado (eliminado).');
    }
}
