<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAtendimento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipo_atendimento';
    protected $primaryKey = 'Id_Tipo_Atendimento';
    protected $fillable = [""];

    public $timestamps = true;
    public $incrementing = false;
}
