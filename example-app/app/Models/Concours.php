<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'id_dossier_candidat',
        'nom_concours',
        'description',
        'date_debut',
        'date_fin'
    ];

    /**
     * Relation avec le modèle DossierCandidat.
     */
    public function dossierCandidat()
    {
        return $this->belongsTo(DossierCandidat::class, 'id_dossier_candidat');
    }

    public function candidats()
{
    return $this->hasMany(Candidat::class, 'concours_id');
}

    /**
     * Relation avec le modèle Resultat.
     */
    public function resultats()
    {
        return $this->hasMany(Resultat::class, 'id_concours');
    }

    /**
     * Relation avec le modèle Gestion.
     */
    public function gestions()
    {
        return $this->hasMany(Gestion::class, 'id_concours');
    }

}
