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

Route::post("/utilisateur/inscription", [UserController:: class, "inscription"]);

Route::get("/posts", [PostsController::class, "index"]);
Route::post("/posts", [PostsController::class, "store"]);
Route::get("/posts/{id}", [PostsController::class, "show"]);
Route::delete("/posts/{id}", [PostsController::class, "destroy"]);
Route::put("/posts/{id}", [PostsController::class, "update"]);


