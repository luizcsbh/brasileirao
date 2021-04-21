<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    
    public function index()
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>Time::all()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível capturar os dados dos times',
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
    
            $time = Time::create([
                'name'=>$request->input('name'),
                'complete'=>$request->input('complete')
            ]);
    
            return response()->json([
                'info'=>'success',
                'result'=>$time
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível criar série',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function show(Time $time)
    {

        try {
            return response()->json([
                'info'=>'success',
                'result'=>$time
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível recuperar os dados do time',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function update(Request $request, Time $time)
    {

        try {
            $request->validate([
                'name'=>'required|max:20',
                'complete'=>'required'
            ]);
    
            $time->name = $request->input('name');
            $time->complete = $request->input('complete');
            
            return response()->json([
                'info'=>'success',
                'result'=>$time
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível alterar os dados da Time',
                'error'=>$e->getMessage(),
            ], 400);
        }

    }

    public function destroy(Time $time)
    {

        try {
            return response()->json([
                'info'=>['success'=>'Time removido com sucesso!'],
                'result'=>$time->delete()
            ]);
        } catch(Exception $e) {
            return response()->json([
                'info'=> 'error',
                'result'=>'Não foi possível capturar os dados do time',
                'error'=>$e->getMessage(),
            ], 400);$table->foreign('campeonatos_id')
            ->references('campeonatos_id')
            ->on('campeonatos');
        
        }

    }

}
