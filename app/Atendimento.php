<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'atendimento';
    protected $primaryKey = 'Id_Atendimento';
    protected $fillable = [
        'Fk_Tipo_Atendimento', 'Fk_Tipo_Conclusao', 'Fk_Tipo_PFPJ', 'Fk_Tipo_Registro',
        'Fk_Id_Motivo', 'Fk_Id_Atendente', 'Att_Cadastral', 'Outros_Motivos',
        'Nome_Atendido', 'CPFCNPJ'
    ];

    public $timestamps = false;
    public $incrementing = false;
}
