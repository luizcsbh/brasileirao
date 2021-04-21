<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{

    protected $fillable = ['name', 'complete'];
    protected $primaryKey = 'series_id';
    protected $dates = ['deleted_at'];

    public function campeonato()
    {

        return $this->belongsTo(Campeonato::class,'series_id','series_id');

    }
    
}
