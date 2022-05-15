<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Responsable_filiere;
use app\Models\Module;

class Filiere extends Model
{
    use HasFactory;

    public function Responsable_filiere()
    {
        return $this->belongsTo(Responsable_filiere::class, 'code_fil');
    }

    public function Module()
    {
        return $this->hasMany(Module::class ,'code_fil','code');
    }
}
