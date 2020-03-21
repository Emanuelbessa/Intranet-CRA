<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\{Atendimento, PFPJ, TipoAtendimento, TipoRegistro};
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
        return view('Atendimento/atendimento', [
            'usuario_nome' => $user->first_name,
            'usuario_sobrenome' => $user->last_name,
            'atendimentosfeitos' => count($atendimentofeitos),
            'atendimentostelefone' => count($atendimentostelefone)
        ]);
    }

    public function atendimentoNovo()
    {
        return view('Atendimento/atendimentoNovo');
    }

    public function relatorio()
    {
        $tipo_atendimento = DB::table('tipo_atendimento')->get();
        $tipo_pfpj = DB::table('tipo_pfpj')->get();
        $tipo_registro = DB::table('tipo_registro')->get();
        $motivos = DB::table('motivos')->get();

        return view('Atendimento/atendimentoRelatorio', ['motivos' => $motivos, 'pfpj' => $tipo_pfpj, 'tipo_atendimento' => $tipo_atendimento, 'tipo_registro' => $tipo_registro]);
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

    public function relatorioNovo(Request $req)
    {
        
        if ($req->filtros == null) {
            $req->filtros = ['Pessoa Fisica', 'Pessoa Juridica', 'Registrado', 'Nao Registrado', 'Presencial', 'Telefone', 'Outros'];
        }

        $tipo_atendimento = new TipoAtendimento();
        $tipo_pfpj = new PFPJ();
        $tipo_registro = new TipoRegistro();

        $tipo_pfpj = PFPJ::all();
        foreach ($tipo_pfpj as $pfpj) {
            $PFPJ_Array[] = $pfpj->Nome_Tipo_PFPJ;
        }
        $tipo_registro = TipoRegistro::all();
        foreach ($tipo_registro as $registro) {
            $Registro_Array[] = $registro->Nome_Tipo_Registro;
        }
        $tipo_atendimento = TipoAtendimento::all();
        foreach ($tipo_atendimento as $atendimento) {
            $Atendimento_Array[] = $atendimento->Nome_Tipo_Atendimento;
        }

        $PFPJ = array_intersect($PFPJ_Array, $req->filtros);
        $Registro = array_intersect($Registro_Array, $req->filtros);
        $Atend = array_intersect($Atendimento_Array, $req->filtros);


 //dd($PFPJ, $Registro, $Atend);
        /*if (in_array("Pessoa Fisica", $req->filtros) xor in_array("Pessoa Juridica", $req->filtros)) {
                    $tipo_pfpj = PFPJ::where('Nome_Tipo_PFPJ', $req->filtros[$i])->first()->Id_Tipo_PFPJ;
                }

                if (in_array("Registrado", $req->filtros) xor in_array("Nao Registrado", $req->filtros)) {
                    $tipo_registro = TipoRegistro::where('Nome_Tipo_Registro', $req->filtros[$i])->first()->Id_Tipo_Registro;       
                }
                */
        /*if (in_array("Presencial", $req->filtros) || in_array("Telefone", $req->filtros) || in_array("Outros", $req->filtros)) {
                    $tipo_atendimento = TipoAtendimento::where('Nome_Tipo_Atendimento' , $req->filtros[$i])->first()->Id_Tipo_Atendimento;
                    $filtros[$i] = $tipo_atendimento;
                    dd($filtros);
                    if (!$tipo_atendimento->isEmpty()) {
                        foreach ($filtros[$i] as $filtro) {
                            $filtros_array[$i] = $filtro->Id_Tipo_Atendimento;
                        }
                        // dd($filtros_array);
                    }
                }*/

        //dd($filtros);


 
        if ($req->motivos == null) {
            $motivos = DB::table('motivos')->get();
            foreach ($motivos as $motivo) {
                $Motivos[] = $motivo->Id_Motivo;
            }
        } else {
            for ($x = 0; $x < sizeof($req->motivos); $x++) {
                $motivos[$x] = $req->motivos[$x];
            }
        }

        if ($PFPJ == null) {
            $PFPJ = DB::table('tipo_pfpj')->pluck('Id_Tipo_PFPJ');
            /*foreach ($PFPJ as $pf_pj) {
                $Pessoas[] = $pf_pj->Id_Tipo_PFPJ;
            }*/
           // dd($PFPJ);
        } else {
            $PFPJ = PFPJ::where('Nome_Tipo_PFPJ', $PFPJ)->first()->Id_Tipo_PFPJ;
        }


        dd($PFPJ, $Registro, $Atend, $Motivos);


        $datainicial = $req->datainicial;
        $datafinal = $req->datafinal;

        $AtendimentosFiltrados = DB::table('atendimento')
            ->whereIn('Fk_Tipo_Registro', $Registro)
            ->whereIn('Fk_Tipo_PFPJ', $PFPJ)
            ->whereIn('Fk_Tipo_Atendimento', $Atend)
            ->whereIn('Fk_Id_Motivo', $Motivos)
            ->get();

        dd($AtendimentosFiltrados);

        return view('Atendimento/atendimentoRelatorioResultado');
    }
}
/* 
                $ArrayAtendimento = [];
                $ArrayAtendimento[$i] = ['Fk_Tipo_Registro' => $req->TipoRegistro,'Fk_Tipo_PFPJ' => $req->PFPJ, 'Nome_Atendido' => $req->nomeprincipal,
                'CPFCNPJ' => $req->cpfcnpjprincipal, 'Fk_Tipo_Atendimento' => $req->TipoAtendimento, 'Fk_Tipo_Conclusao' => $req->TipoConclusao,
                'Att_Cadastral'=> $req->Att, 'Fk_Id_Atendente' => $req->Fk_Id_Atendente, 'Fk_Id_Motivo' => $req->atendimentomotivos[$i],
                'Fk_Id_SubMotivos' => $req->atendimentosubmotivos[$i], 'Outros_Motivos' => $req->atendimentooutrosmotivos, 'created_at' => Carbon::now()];
                DB::table('atendimento')->insert($ArrayAtendimento[$i]);*/
