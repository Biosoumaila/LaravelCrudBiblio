<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
    return view('authors.index',compact('authors'));
    }

    public function create() {
        return view('authors.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Autheur cree avec succes');
    }

    public function show(Author $author){
        return view('authors.show',compact('author'));
    }
    public function edit(Author $author){
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' =>'required|string|max:255',
        ]);
        $author->update($request->all());
        return redirect()->route('authors.index')->with('success','Auteur mise a jour avec succes');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success','Auteur  supprime avec succes');
    }
}
