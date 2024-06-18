<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use App\Http\Requests\StoreFormulaireRequest;
use App\Http\Requests\UpdateFormulaireRequest;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulaires = Formulaire::all();
        return view('fromulaires.index', compact('formulaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormulaireRequest $request)
    {
        $validatedData = $request->validate([
            'utilisateur_id' => 'nullable|integer',
            'logo' => 'nullable|integer',
        ]);

        Formulaire::create($validatedData);
        return redirect()->route('formulaires.index')->with('success', 'Formulaire créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulaire $formulaire)
    {
        return view('formulaires.show', compact('formulaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulaire $formulaire)
    {
        return view('formulaires.edit', compact('formulaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormulaireRequest $request, Formulaire $formulaire)
    {

        $formulaire->update($request->all());
        return redirect()->route('formulaires.index')->with('success', 'Formulaire mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulaire $formulaire)
    {
        $formulaire->delete();
        return redirect()->route('compagnies.index')->with('success', 'Compagnie supprimer avec succès.');
    }
}
