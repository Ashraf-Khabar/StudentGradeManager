<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Filiere;
use app\Models\Notes;
use app\Models\Moyennes;


class Eleve extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class,'login','login');
    }
    public function Filiere()
    {
        return $this->belongsTo(Filiere::class, 'code_fil','code');
    }
    public function Note()
    {
        return $this->hasMany(Note::class ,'code_eleve','code');
    }
    public function Moyennes()
    {
        return $this->hasMany(Moyennes::class ,'code_eleve','code');
    }

}
