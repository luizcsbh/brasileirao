<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{

    protected $fillable = ['campeonatos_id','name','jogos','pontos','vitorias','empates','derrotas','gols_pro','gols_contra','saldo_gols'];
    protected $primaryKey = 'times_id';
    protected $dates = ['deleted_at'];


    public function campeonato() {

        return $this->hasMany(Campeonato::class, 'campeonatos_id', 'campeonatos_id');

    }
    
}
