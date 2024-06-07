<?php

namespace App\Http\Controllers;

use App\Models\Concours;
use App\Models\Candidat;
use Illuminate\Http\Request;

class ConcoursController extends Controller
{
    public function index()
    {
        $concours = Concours::paginate(10); // Paginer les résultats pour éviter les erreurs avec de grandes collections
        return view('concours.index', compact('concours'));
    }
    
   // Dans la méthode showCandidates du contrôleur CandidatureController
public function showCandidates($id)
{
    $concours = Concours::findOrFail($id);
    $candidats = Candidat::findOrFail($id)->get();

    return view('concours.candidat', compact('concours', 'candidats'));
}

    
    public function show($id)
    {
        $concours = Concours::findOrFail($id);
        return view('concours.show', compact('concours'));
    }
    public function create()
    {
        return view('concours.create');
    }
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_concours' => 'required',
            'description' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        // Création du concours avec les données validées
        Concours::create($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('concours.index')->with('success', 'Concours ajouté avec succès.');
    }
    public function edit($id)
    {
        $concours = Concours::findOrFail($id);
        return view('concours.edit', compact('concours'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_concours' => 'required',
            'description' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        // Mise à jour du concours avec les données validées
        $concours = Concours::findOrFail($id);
        $concours->update($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('concours.index')->with('success', 'Concours modifié avec succès.');
    }

    public function destroy($id)
    {
        $concours = Concours::findOrFail($id);
        $concours->delete();

        return redirect()->route('concours.index')->with('success', 'Concours supprimé avec succès.');
    }
}
