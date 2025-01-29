<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitFormRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Request $request){
        $produits = Produit::query()->paginate();
        return response()->json($produits);
    }

    public function store(ProduitFormRequest $request){

        //dd($request->input('nom'));
        $produit = Produit::create($request->validated());
        return response()->json([
            'produit'=>$produit,
            'message'=>'Produit ajouté avec succès',
            'status'=>200
        ]

        );
    }

    public function show(Produit $produit){
        //$produit = Produit::find($id);
        return response()->json($produit);
    }

    public function update(Request $request, $id){
        $produit = Produit::find($id);
        $produit->update($request->all());
        return response()->json([
            'produit'=>$produit,
            'statut'=>200,
            'msg'=>'produit modifier avec succès'
        ]);
    }

    public function destroy($id){
        $produit = Produit::find($id);
        $produit->delete();
        return response()->json([
            'produit'=>$produit,
            'statut'=>200,
            'message'=>'Produi supprimer avec succes'
        ]);
    }
}
