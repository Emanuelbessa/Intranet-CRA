<?php

namespace App\Http\Controllers;

use DB;
use App\Atendimento;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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

    public function criarAtendimento(Request $req)
    {
        //dd($req->all());
        // dd($req->TamanhoObjeto);
        //   DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
        //     DB::beginTransaction();

        $atendimento = new Atendimento();

        //dd(intval($req->TamanhoObjeto));
        if (intval($req->TamanhoObjeto) > 1) {


            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
            DB::beginTransaction();

            for ($i = 0; $i < intval($req->TamanhoObjeto); $i++) {
                dump($atendimento->save());
                $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
                $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
                $atendimento->Nome_Atendido = $req->nomeprincipal;
                $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
                $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
                $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
                $atendimento->Att_Cadastral = $req->Att;
                $atendimento->Fk_Id_Atendente = $req->Fk_Id_Atendente;
                $atendimento->Fk_Id_Motivo = $req->atendimentomotivos[$i];
                $atendimento->Fk_Id_SubMotivos = $req->atendimentosubmotivos[$i];
                $atendimento->Outros_Motivos = $req->atendimentooutrosmotivos;
                $atendimento->save();
            }
            try {
                DB::commit();
                DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
                return response()->json(['retorno' => true, 'atendimento' => $atendimento]);
            } catch (\Exception $e) {
                dd($e->getMessage());
                DB::rollback();
                DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
                return response()->json(['retorno' => false]);
            }
        } else {
            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
            DB::beginTransaction();
            dump("Entrei no Else");
            $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
            $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
            $atendimento->Nome_Atendido = $req->nomeprincipal;
            $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
            $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
            $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
            $atendimento->Att_Cadastral = $req->Att;
            $atendimento->Fk_Id_Atendente = $req->Fk_Id_Atendente;
            $atendimento->Fk_Id_Motivo = $req->atendimentomotivos[0];
            $atendimento->Fk_Id_SubMotivos = $req->atendimentosubmotivos[0];
            $atendimento->Outros_Motivos = $req->atendimentooutrosmotivos;

            try {
                $atendimento->save();
                DB::commit();
                DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
                return response()->json(['retorno' => true, 'atendimento' => $atendimento]);
            } catch (\Exception $e) {
                dd($e->getMessage());
                DB::rollback();
                DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
                return response()->json(['retorno' => false]);
            }
        }
    }
}
