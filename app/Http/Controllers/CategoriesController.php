<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categories::with("articles")->get();

        return response()->json($categorie, 200);
    }

   
    public function store(Request $request)
    {
        $categorie = new Categories();
        $categorie->nom =  $request->json("nom");
        $categorie->description =  $request->json("description");
        $categorie->save();

        return response()->json($categorie, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $categorie = Categories::where("id", $id)->with("articles")->first();

        return response()->json($categorie, 200);
    }

    public function update(Request $request, $id)
    {
        $categorie = Categories::find($id);
        $categorie->nom =  $request->json("nom");
        $categorie->description =  $request->json("description", 200);
        $categorie->save();

        return response()->json($categorie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $categorie = Categories::find($id);

        $categorie->delete();

        return response()->json("Categorie supprimée avec succès", 200);
    }
}
