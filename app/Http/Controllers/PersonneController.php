<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    //Eloquent pour afficher toutes les personnes
    public function affichePersonne()
    {
        $personnes = Personne::all();
        return response()->json($personnes);
    }
//Eloquent pour afficher les 25 premiere personnes
    public function premieresPersonnes()
    {
        $personnes = Personne::take(25)->get();
        return response()->json($personnes);
    }
//afficher les personnes en ordre croissant
    public function croissant()
    {
        $personnes = Personne::orderBy('id','ASC')->get();
        return response()->json($personnes);
    }
    //afficher les personnes en ordre decroissant
    public function decroissant()
    {
        $personnes = Personne::orderBy('id', 'DESC')->get();
        return response()->json($personnes);
    }

    //age croissant

    public function ageCroissant()
    {
        $personnes = Personne::orderBy('age','ASC')->get();
        return response()->json($personnes);
    }
    //age decroissant
    public function ageDecroissant()
    {
        $personnes = Personne::orderBy('age', 'DESC')->get();
        return response()->json($personnes);
    }
    //age inferieur 
    public function ageInfTren()
    {
        $personnes = Personne::where('age','<',30)->get();
        return response()->json($personnes);
    }
    //age supperieur a 30
    public function ageSupTren()
    {
        $personnes = Personne::where('age','>', 30)->get();
        return response()->json($personnes);
    }

    //age inferieur a 40
    public function ageInfQuarante()
    {
        $personnes = Personne::where('age','<', 40)->get();
        return response()->json($personnes);
    }

    //age superieur a 20
    public function ageSupVingt()
    {
        $personnes = Personne::where('age','>', 20)->get();
        return response()->json($personnes);
    }


     // recuperer une information egale à c'elle entrée
     public function infoEqual($information)
     {
         $personnes = Personne::where('information','like', $information)->get();
         return response()->json($personnes);
     }

     // recuperer un nom egale à celui entrée
     public function nomEqual($nom)
     {
         $personnes = Personne::where('nom','like', $nom)->get();
         return response()->json($personnes);
     }

     // afficher les personnes dont l'age inferieur à 30 et id supperieur à 20
     public function ageInfIdSup($age,$id)
     {
         $personnes = Personne::where('age','<', 30)->where('id','>',20)->get();
         return response()->json($personnes);
     }

     // Requête pour supprimer les personnes dont l'âge est supérieur à 30
    public function deleteAge()
    {
        $personnes = Personne::where('age','>', 30)->delete();
         return response()->json($personnes);
    }
     




}
