<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $guarded=[];
// la fonction designe qu'une categorie peut contenir plusieur articles d'ou hasMany
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
