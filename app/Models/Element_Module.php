<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
use app\Models\Notes ;

class Element_Module extends Model
{
    use HasFactory;

    public function Module()
    {
        return $this->belongsTo(Responsable_filiere::class, 'code_fil','code');
    }

    public function Notes()
    {
        return $this->hasMany(Notes::class ,'code_elm_mod','code');
    }

}
