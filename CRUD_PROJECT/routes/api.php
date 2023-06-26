<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::get('/',function() {
//     return ["Hello" => "World"];
// });


Route::post("/utilisateur/inscription", [UserController:: class, "inscription"]); //méthode "inscription"
//on spécifie la méthode "inscription dans un tableau


Route::get("/posts", [PostsController::class, "index"]);  // affiche tous les posts
Route::post("/posts", [PostsController::class, "store"]); // crée un post
Route::get("/posts/{id}", [PostsController::class, "show"]); // affiche un seul post
Route::delete("/posts/{id}", [PostsController::class, "destroy"]); //
Route::put("/posts/{id}", [PostsController::class, "update"]); //



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
