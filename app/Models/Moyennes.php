<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Eleve;
use app\Models\Filiere;

class Moyennes extends Model
{
    use HasFactory;
    public function Eleve()
    {
        return $this->belongsTo(Eleve::class,'code_eleve','code');
    }
    public function Filiere()
    {
        return $this->belongsTo(Filiere::class, 'code_fil','code');
    }
}
