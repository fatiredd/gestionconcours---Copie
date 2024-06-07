<?php


namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;

class ResultatsController extends Controller
{
    public function index()
    {
        $resultats = Resultat::all();
        return view('concours.resultats', compact('resultats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_resultat' => 'required|mimes:pdf|max:10240', // Max 10MB
        ]);


        $documentPath = $request->file('document_resultat')->store('resultats');

        Resultat::create([
            'document_resultat' => $documentPath,
        ]);

        
        return redirect()->route('concours.resultats')->with('success', 'Document inséré avec succès.');
    }

    public function show($id)
    {
        $resultat = Resultat::findOrFail($id);
        return response()->file(storage_path('app/' . $resultat->document_resultat));
    }
}




?>
