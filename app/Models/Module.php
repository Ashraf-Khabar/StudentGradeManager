<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\Element_Module;
use app\Models\Filiere;

class Module extends Model
{
    use HasFactory;

    public function Filiere()
    {
        return $this->belongsTo(Filiere::class, 'code_fil', 'code');
    }

    public function Element_Module()
    {
        return $this->hasMany(Element_Module::class,'code_module','code');     
    }
}
