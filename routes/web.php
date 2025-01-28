<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('produits', ProduitController::class);
/* Route::get('produit' , [ProduitController::class, 'index']);
Route::post('/produit' , [ProduitController::class, 'store']); */
