<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PFPJ extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipo_pfpj';
    protected $primaryKey = 'Id_Tipo_PFPJ';
    protected $fillable = [""];

    public $timestamps = true;
    public $incrementing = false;
}
