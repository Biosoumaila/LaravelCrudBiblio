<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeEmplacementController extends Controller
{
    public function index()
    {
        $typeEmplacement = TypeEmplacement::all();
    return view('typeEmplacement.index', compact('typeEmplacement')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idType' => 'required|max:255',
            'libelle' => 'required',
            
           ]);
           TypeEmplacement::create($request->all());
           return redirect()->route('typeEmplacement.index')
            ->with('success','TypeEmplacement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $TypeEmplacement = TypeEmplacement::find($id);
        return view('typeEmplacement.show', compact('TypeEmplacement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'idType' => 'required|max:255',
            'libelle' => 'required',
          ]);
          $TypeEmplacement = TypeEmplacement::find($id);
          $TypeEmplacement->update($request->all());
          return redirect()->route('typeEmplacement.index')
            ->with('success', 'TypeEmplacement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $TypeEmplacement = TypeEmplacement::find($id);
        $TypeEmplacement->delete();
        return redirect()->route('typeEmplacement.index')
          ->with('success', 'TypeEmplacement supprime avec succes');
    }

    public function create()
    {
      return view('typeEmplacement.create');
    }

    public function edit($id)
  {
    $TypeEmplacement = TypeEmplacement::find($id);
    return view('typeEmplacement.edit', compact('TypeEmplacement'));
  }
}
