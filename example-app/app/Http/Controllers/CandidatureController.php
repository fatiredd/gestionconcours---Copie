<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function create($concours_id)
    {
        return view('candidature.create', compact('concours_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'niveau_scolaire' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'concours_id' => 'required|exists:concours,id',
        ]);

        Candidat::create($request->all());

        return redirect()->route('concours.index')->with('success', 'Votre candidature a été soumise avec succès.');
    }

    public function index($concours_id)
    {
        $candidats = Candidat::where('concours_id', $concours_id)->get();
        return view('candidature.index', compact('candidats', 'concours_id'));
    }

    public function show($id)
    {
        $candidat = Candidat::findOrFail($id);
        return view('candidature.show', compact('candidat'));
    }
    
}
