<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    
    protected $fillable = ['series_id','name','description','data_inicio','data_fim', 'valor_premio'];
    protected $primaryKey = 'campeonatos_id';
    protected $dates = ['deleted_at'];

    
    public function serie()
    {

        return $this->hasOne(Serie::class, 'series_id', 'series_id');

    }

    public function times()
    {

        return $this->hasMany(Time::class, 'times_id', 'times_id');

    }

}
