<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    //on ne bloque aucun champ 
    protected $guarded=[];
//pour designer que les articles ont une et une seule categorie grace à belongsTo
    public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }
}
