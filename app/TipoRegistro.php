<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRegistro extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipo_registro';
    protected $primaryKey = 'Id_Tipo_Registro';
    protected $fillable = [""];

    public $timestamps = true;
    public $incrementing = false;
}
