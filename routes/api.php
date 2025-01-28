<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('produit' , [ProduitController::class, 'index']);
Route::get('produit/{produit}' , [ProduitController::class, 'show']);
Route::post('/produit' , [ProduitController::class, 'store']);
Route::put('/produit/{produit}' , [ProduitController::class, 'update']);
Route::delete('/produit/{produit}' , [ProduitController::class, 'destroy']);
