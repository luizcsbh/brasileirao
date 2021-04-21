<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    
    public function index()
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>Serie::all()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível capturar os dados das séries',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function store(Request $request)
    {

        try {
            $request->validate([
                'name'=>'required|max:20',
                'complete'=>'required'
            ]);
    
            $serie = Serie::create([
                'name'=>$request->input('name'),
                'complete'=>$request->input('complete')
            ]);
    
            return response()->json([
                'info'=>'success',
                'result'=>$serie
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível criar série',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function show(Serie $serie)
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>$serie
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível recuperar os dados da série',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function update(Request $request, Serie $serie)
    {

        try {
            $request->validate([
                'name'=>'required|max:20',
                'complete'=>'required'
            ]);
    
            $serie->name = $request->input('name');
            $serie->complete = $request->input('complete');
            
            return response()->json([
                'info'=>'success',
                'result'=>$serie
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível alterar os dados da Série',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function destroy(Serie $serie)
    {

        try {
            return response()->json([
                'info'=>['success'=>'Série removida com sucesso!'],
                'result'=>$serie->delete()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível capturar os dados da série',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

}
