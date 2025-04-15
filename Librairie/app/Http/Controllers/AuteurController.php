<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;



class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auteurs = Auteur::all();
        return view('auteurs.index', compact('auteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auteurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' =>'required|string|max:255',
        ]);
        Auteur::create($request->all());
        return redirect()->route('auteurs.index')->with('succes', 'Auteur cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Auteur $auteur)
    {
        return view('auteurs.show', compact('auteur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auteur $auteur)
    {
        return view('auteurs.edit', compact('auteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auteur $auteur)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
        ]);
        $auteur->update($request->all());
        return redirect()->route('auteurs.index')->with('Success', 'Auteur mise a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auteur $auteur)
    {
        $auteur->delete();
        return redirect()->route('auteurs.index')->with('succes', 'Auteur supprime avec succes');
    }
}
