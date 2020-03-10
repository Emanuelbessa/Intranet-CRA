<?php

namespace App\Http\Controllers;

use DB;
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
        DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
        DB::beginTransaction();
        //dd($req->checkbox);

        $atendimento = new Atendimento();
        
        $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
        $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
        $atendimento->Nome_Atendido = $req->nomeprincipal;
        $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
        $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
        $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
        $atendimento->Att_Cadastral = $req->Att;
        $atendimento->Fk_Id_Atendente = $req->Fk_Id_Atendente;
        $atendimento->Fk_Id_Motivo = $req->checkbox[0];

        try{
            $atendimento->save();
            DB::commit();
            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT,1);
            return response()->json(['retorno' => true, 'atendimento' =>$atendimento]); 

        }catch(\Exception $e){
            dd($e->getMessage());
            DB::rollback();
            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT,1);
            return response()->json(['retorno' => false]);

        }

        
    }
}
