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

    public function criarAtendimento(Request $req){
        dd($req->all());
        $atendimento = new Atendimento();
        
        $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
        $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
        $atendimento->Nome_Atendido = $req->nomeprincipal;
        $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
        $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
        $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
        $atendimento->Att_Cadastral = $req->Att;

        $atendimento->checkmotivo18 = $req->Fk_Id_Motivo;


        
    }
}
