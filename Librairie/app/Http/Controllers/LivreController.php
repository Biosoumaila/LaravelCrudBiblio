<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Auteur;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::with('auteur')->get();
        return view('livres.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all();
        return view('livres.create',compact('auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description'=> 'nullable|string',
            'auteur_id'=> 'required|exists:auteurs,id',
        ]);
        Livre::create($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre cree avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        $livre->load('auteur');
        return view('livres.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        $auteurs = Auteur::all();
        return view('livres.edit',compact('livre', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' =>'required|string|max:255',
            'description' => 'nullable|string',
            'auteur_id' =>'required|exists::auteurs,id',
        ]);
        $livre->update($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre mis ajour avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route('livres.index')->with('success', 'Livre supprime avec succes');
    }
}
