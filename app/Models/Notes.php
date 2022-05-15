<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Eleve;
use app\Models\Element_Module;

class Notes extends Model
{
    use HasFactory;

    public function Eleve()
    {
        return $this->belongsTo(Eleve::class,'code_eleve','code');
    }
    public function Element_Module()
    {
        return $this->belongsTo(Element_Module::class, 'code_elm_mod','code');
    }

    
}
