<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Receita;
class ReceitasController extends Controller
{
    public function index()
    {
        $receitas = Receita::All();
        return response()->json($receitas);
    }

    public function show($id)
    {
        $receitas = Receita::find($id);

        if(!$receitas) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($receitas);
    }

   public function store(Request $request)
    {
        $receitas = new Receita();
        $receitas->fill($request->all());
        $receitas->save();

        return response()->json($receitas, 201);
    }

    public function update(Request $request, $id)
    {
        $receitas = Receita::find($id);

        if(!$receitas) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $receitas->fill($request->all());
        $receitas->save();

        return response()->json($receitas);
    }

     public function destroy($id)
    {
        $receitas = Receita::find($id);

        if(!$receitas) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $receitas->delete();
    }
}


