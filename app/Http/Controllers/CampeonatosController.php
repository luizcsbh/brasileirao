<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatosController extends Controller
{
    
    public function index()
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>Campeonato::all()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi retornar os dados dos Campeonatos!',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function store(Request $request)
    {

        try {
            $request->validade([
                'series_id'=>'required',
                'name'=>'required|max:255',
                'description'=>'required|max:255',
                'data_inicio'=>'required|date_format:YYYY/mm/ddd',
                'data_fim'=>'required|date_format:YYYY/mm/ddd'
            ]);
            
            $campeonato = Campeonato::create([
                'series_id'=>$request->input('serie_id'),
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'data_inicio'=>$request->input('data_inicio'),
                'data_fim'=>$request->input('data_fim')
            ]);
    
            return response()->json([
                'info'=>'success',
                'result'=>$campeonato

            ]);
            
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível gravar os dados do Campeonato',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function show(Campeonato $campeonato)
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>$campeonato
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi recuperar os dados do Campeonato',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function update(Request $request, Campeonato $campeonato)
    {

        try {
            $request->validade([
                'series_id'=>'required',
                'name'=>'required|max:255',
                'description'=>'required|max:255',
                'data_inicio'=>'required|date_format:YYYY/mm/ddd',
                'data_fim'=>'required|date_format:YYYY/mm/ddd'
            ]);
    
            $campeonato = Campeonato::create([
                $campeonato->serie_id = $request->input('serie_id'),
                $campeonato->name = $request->input('name'),
                $campeonato->description = $request->input('description'),
                $campeonato->data_inicio = $request->input('data_inicio'),
                $campeonato->data_fim = $request->input('data_fim')
            ]);
            return response()->json([
                'info'=>'success',
                'result'=>$campeonato
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível criar o Campeonato',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function destroy(Campeonato $campeonato)
    {

        try {
            return response()->json([
                'info'=>['success'=>'Campeonato removido!'],
                'result'=>$campeonato->delete()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi retornar os dados dos Campeonatos!',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

}
