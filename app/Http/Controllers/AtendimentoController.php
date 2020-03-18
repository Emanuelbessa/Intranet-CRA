<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Atendimento;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class AtendimentoController extends Controller
{
    public function Atendimento()
    {

        $user = Auth::user();
        $carbon = Carbon::today();
        $atendimentostelefone = Atendimento::where(['Fk_Id_Atendente' => $user->id])->where('Fk_Tipo_Atendimento', '=', '2')->get();
        $atendimentofeitos = Atendimento::where(['Fk_Id_Atendente' => $user->id])->where('created_at', '>', $carbon)->get();
        return view('atendimento',[
            'usuario_nome' => $user->first_name,
            'usuario_sobrenome' =>$user->last_name,
            'atendimentosfeitos' => count($atendimentofeitos),
            'atendimentostelefone' => count($atendimentostelefone)
        ]);
    }

    public function atendimentoNovo()
    {
        return view('atendimentoNovo');
    }

    public function criarAtendimento(Request $req)
    {

        DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 0);
        DB::beginTransaction();

        try {
                $atendimento = null;
            for ($i = 0; $i < intval($req->TamanhoObjeto); $i++) {
                
                $atendimento = new Atendimento();
                $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
                $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
                $atendimento->Nome_Atendido = $req->nomeprincipal;
                $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
                $atendimento->Nome_Representante = $req->nomerepresentante;
                $atendimento->CPF_Representante = $req->cpfcnpjrepresentante;
                $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
                $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
                $atendimento->Att_Cadastral = $req->Att;
                $atendimento->Fk_Id_Atendente = $req->Fk_Id_Atendente;
                $atendimento->Fk_Id_Motivo = $req->atendimentomotivos[$i];
                if ($req->atendimentomotivos[$i] == 22) {
                    $atendimento->Fk_Id_SubMotivos = $req->atendimentosubmotivos[0];
                }
                $atendimento->Fk_Id_Atendente = Auth::user()->id;
                $atendimento->save();
            }
            if ($req->atendimentooutrosmotivos) {
                $atendimento = new Atendimento();
                $atendimento->Fk_Tipo_Registro = $req->TipoRegistro;
                $atendimento->Fk_Tipo_PFPJ = $req->PFPJ;
                $atendimento->Nome_Atendido = $req->nomeprincipal;
                $atendimento->CPFCNPJ = $req->cpfcnpjprincipal;
                $atendimento->Nome_Representante = $req->nomerepresentante;
                $atendimento->CPF_Representante = $req->cpfcnpjrepresentante;
                $atendimento->Fk_Tipo_Atendimento = $req->TipoAtendimento;
                $atendimento->Fk_Tipo_Conclusao = $req->TipoConclusao;
                $atendimento->Att_Cadastral = $req->Att;
                $atendimento->Fk_Id_Atendente = $req->Fk_Id_Atendente;
                $atendimento->Fk_Id_Atendente = Auth::user()->id;
                $atendimento->Outros_Motivos = $req->atendimentooutrosmotivos;
                $atendimento->save();
            }
            DB::commit();
            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
            return response()->json(['retorno' => true, 'atendimento' => $atendimento]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            DB::getPdo()->setAttribute(\PDO::ATTR_AUTOCOMMIT, 1);
            return response()->json(['retorno' => false, 'atendimento' => $atendimento]);
        }
    }
}
/* 
                $ArrayAtendimento = [];
                $ArrayAtendimento[$i] = ['Fk_Tipo_Registro' => $req->TipoRegistro,'Fk_Tipo_PFPJ' => $req->PFPJ, 'Nome_Atendido' => $req->nomeprincipal,
                'CPFCNPJ' => $req->cpfcnpjprincipal, 'Fk_Tipo_Atendimento' => $req->TipoAtendimento, 'Fk_Tipo_Conclusao' => $req->TipoConclusao,
                'Att_Cadastral'=> $req->Att, 'Fk_Id_Atendente' => $req->Fk_Id_Atendente, 'Fk_Id_Motivo' => $req->atendimentomotivos[$i],
                'Fk_Id_SubMotivos' => $req->atendimentosubmotivos[$i], 'Outros_Motivos' => $req->atendimentooutrosmotivos, 'created_at' => Carbon::now()];
                DB::table('atendimento')->insert($ArrayAtendimento[$i]);*/
