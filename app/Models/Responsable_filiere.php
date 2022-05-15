<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use App\Models\Filiere;
class Responsable_filiere extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class, 'login', 'login');
    }

    public function Filere()
    {
        return $this->hasOne(Filiere::class, 'responsable');     
    }
}
