<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Routes categorie
Route::get("categorie", [CategoriesController::class, "show"]);
Route::put("categorie/{id}", [CategoriesController::class, "update"]);
Route::post("categorie", [CategoriesController::class, "index"]);
Route::get("categorie/{id}", [CategoriesController::class, "store"]);
Route::delete("categorie/{id}", [CategoriesController::class, "destroy"]);


// Articles
Route::get("articles", [ArticlesController::class, "index"]);
Route::get("articles/{id}", [ArticlesController::class, "show"]);
Route::put("articles/{id}", [ArticlesController::class, "update"]);
Route::post("articles", [ArticlesController::class, "store"]);
Route::delete("articles/{id}", [ArticlesController::class, "destroy"]);

//les personnes
Route::get("affichePersonne", [PersonneController::class,"affichePersonne"]);

Route::get("premierespersonne", [PersonneController::class,"premierespersonnes"]);

Route::get("premierespersonne", [PersonneController::class,"premierespersonnes"]);

Route::get("croissant", [PersonneController::class,"croissant"]);

Route::get("decroissant", [PersonneController::class,"decroissant"]);

Route::get("agecroissant", [PersonneController::class,"ageCroissant"]);

Route::get("agedecroissant", [PersonneController::class,"ageDecroissant"]);

Route::get("ageInfTren", [PersonneController::class,"ageInfTren"]);

Route::get("ageSupTren", [PersonneController::class,"ageSupTren"]);

Route::get("ageInfQuarante", [PersonneController::class,"ageInfQuarante"]);

Route::get("ageSupVingt", [PersonneController::class,"ageSupVingt"]);

Route::get("infoEqual/{information}", [PersonneController::class,"infoEqual"]);

Route::get("nomEqual/{nom}", [PersonneController::class,"nomEqual"]);

Route::get("ageInfIdSup/{age}/{id}", [PersonneController::class,"ageInfIdSup"]);

Route::get("deleteAge", [PersonneController::class,"deleteAge"]);










