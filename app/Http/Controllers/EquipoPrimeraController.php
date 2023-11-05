<?php

namespace App\Http\Controllers;

use App\Models\EquipoPrimera;
use Illuminate\Http\Request;

class EquipoPrimeraController extends Controller
{
    public function index()
    {
        $equipos = EquipoPrimera::all();
        return view('equipos.index', ['equipos' => $equipos]);
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'abreviacion' => 'required|max:10',
            'estadio' => 'required|max:255',
            'alias' => 'nullable|max:255',
            'anios_fundacion' => 'required|digits:4|integer|min:1800|max:' . (date('Y')),
            'campeonatos' => 'required|integer',
            'url' => 'nullable|url',
        ]);

        $equipo = new EquipoPrimera($validatedData);
        $equipo->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('equipos.index')->with('success', 'Equipo agregado con éxito.');
    }
    public function destroy(EquipoPrimera $equipo)
    {
        $equipo->delete();

        // Retorna una respuesta JSON para la solicitud fetch
        return response()->json(['success' => 'El equipo fue eliminado.']);
    }

    public function edit(EquipoPrimera $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, EquipoPrimera $equipo)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'abreviacion' => 'required|string|max:10',
        'estadio' => 'required|string|max:255',
        'alias' => 'nullable|string|max:255',
        'anios_fundacion' => 'required|integer|min:1800|max:' . date('Y'),
        'campeonatos' => 'required|integer|min:0',
        'url' => 'nullable|url',
    ]);

    $equipo->update($validatedData);

    return redirect()->route('equipos.index')->with('success', 'Equipo actualizado con éxito.');
}

}
