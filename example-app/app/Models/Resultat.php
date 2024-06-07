<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $fillable = [
        'id_concours',
        'document_resultat',
    ];

    public function concours()
    {
        return $this->belongsTo(Concours::class, 'id_concours');
    }
}
