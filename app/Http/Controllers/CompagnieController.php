<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use App\Http\Requests\StoreCompagnieRequest;
use App\Http\Requests\UpdateCompagnieRequest;
use Illuminate\Http\Request;
class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compagnies = Compagnie::all();
        return view('compagnies.index',compact('compagnies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('compagnies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompagnieRequest $request)
    {
        //verfication de information saisie
        $validatedData = $request->validate([
            'nom' => 'nullable|string|max:255',
            'nomcomplet' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        //cree un nouveaux compagnie
        Compagnie::create($validatedData);
        //retourne a la page d'accueil
        return redirect()->route('compagnies.index')->with('success', 'Compagnie créée avec sucès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Compagnie $compagnie)
    {
        return view('compagnies.show', compact('compagnie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compagnie $compagnie)
    {
        return view('compagnies.edit', compact('compagnie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompagnieRequest $request, Compagnie $compagnie)
    {
        $validatedData = $request->validate([
            'nom' => 'nullable|string|max:255',
            'nomcomplet' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $compagnie->update($validatedData);
        return redirect()->route('compagnies.index')->with('success', 'Compagnie mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compagnie $compagnie)
    {
        $compagnie->delete();
        return redirect()->route('compagnies.index')->with('success', 'Compagnie supprimer avec succès.');
    }
}
