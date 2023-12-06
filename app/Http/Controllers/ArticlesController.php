<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::with("categorie")->get();

        return response()->json($articles, 200);
    }

    
    public function store(Request $request)
    {
        $article = new Articles();
        $article->categorie_id =  $request->json("categorie_id");
        $article->nom =  $request->json("nom");
        $article->description =  $request->json("description");
        $article->auteur =  $request->json("auteur");
        $article->tags =  $request->json("tags");
        $article->contenu =  $request->json("contenu");
        $article->save();

        return response()->json($article, 200);
    }

    
    public function show( $id)
    {
        $article = Articles::where("id", $id)->with("categorie")->first();

        return response()->json($article, 200);
    }

   
    public function update(Request $request, $id)
    {
        $article = Articles::find($id);
        $article->categorie_id =  $request->json("categorie_id");
        $article->nom =  $request->json("nom");
        $article->description =  $request->json("description");
        $article->auteur =  $request->json("auteur");
        $article->tags =  $request->json("tags");
        $article->contenu =  $request->json("contenu");
        $article->save();

        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Articles::find($id);

        $article->delete();

        return response()->json("article supprimée avec succès", 200);
    }
}
