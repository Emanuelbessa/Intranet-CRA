<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function Atendimento()
    {
        return view('atendimento');
    }

    public function atendimentoNovo()
    {
        return view('atendimentoNovo');
    }

    protected function create(array $data)
    {
        return Atendimento::create([
            'Fk_Tipo_Atendimento' => $data['Fk_Tipo_Atendimento'],
            'Fk_Tipo_Conclusao' => $data['Fk_Tipo_Conclusao'],
            'Fk_Tipo_PFPJ' => $data['Fk_Tipo_PFPJ'],
            'Fk_Tipo_Registro' => $data['Fk_Tipo_Registro'],
            'Fk_Id_Motivo' => $data['Fk_Id_Motivo'],
            'Fk_Id_Atendente' => $data['Fk_Id_Atendente'],
            'Data' => $data['Data'],
            'Att_Cadastral' => $data['Att_Cadastral'],
            'Outros_Motivos' => $data['Outros_Motivos'],
            'Nome_Atendido' => $data['Nome_Atendido'],
            'CPF/CNPJ' => $data['CPF/CNPJ'],
        ]);
    }
}
