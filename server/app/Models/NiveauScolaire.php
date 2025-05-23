<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Eleve;

class NiveauScolaire extends Model
{
    use HasFactory;

    protected $table = 'niveau_scolaire';
    protected $primaryKey = 'code_niveau';
    public $incrementing = false;

    protected $fillable = [
        'description'
    ];

    public function eleves()
    {
        return $this->hasMany(Eleve::class, 'code_niveau');
    }

    public function matieres()
    {
        return $this->hasMany(Matiere::class, 'code_niveau');
    }
}
