<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marche;

class MarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marches = Marche::all(); // Utilisation de $marches au pluriel
        return view('marches.index', compact('marches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomMarche' => 'required|max:255',
            'description' => 'required',
            'capacite' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'image' => 'required',
        ]);
        Marche::create($request->all());
        return redirect()->route('marches.index')
            ->with('success', 'Marche created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomMarche' => 'required|max:255',
            'description' => 'required',
            'capacite' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'image' => 'required',
        ]);

        $marche = Marche::find($id);
        $marche->update($request->all());
        return redirect()->route('marches.index')
            ->with('success', 'Marche updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marche = Marche::find($id);
        $marche->delete();
        return redirect()->route('marches.index')
            ->with('success', 'marche supprime avec succes');
    }

    public function create()
    {
        return view('marches.create');
    }

    public function show($id)
    {
        $marche = Marche::find($id);
        return view('marches.show', compact('marche'));
    }

    public function edit($id)
    {
        $marche = Marche::find($id);
        return view('marches.edit', compact('marche'));
    }
}