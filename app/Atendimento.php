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
    protected $fillable = [
        'Fk_Tipo_Atendimento', 'Fk_Tipo_Conclusao', 'Fk_Tipo_PFPJ', 'Fk_Tipo_Registro',
        'Fk_Id_Motivo', 'Fk_Id_Atendente', 'Data', 'Att_Cadastral', 'Outros_Motivos',
        'Nome_Atendido', 'CPF/CNPJ'
    ];
}
