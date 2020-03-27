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
        if ($req->motivos == null) {
            $motivos = DB::table('motivos')->get();
            foreach ($motivos as $motivo) {
                $TodosMotivos[] = $motivo->Id_Motivo;
            }
        } else {
            for ($x = 0; $x < sizeof($req->motivos); $x++) {
                $TodosMotivos[$x] = $req->motivos[$x];
            }
        }

        if ($req->filtrosPFPJ == null) {
            $req->filtrosPFPJ = PFPJ::all();
            foreach ($req->filtrosPFPJ as $pfpj) {
                $PFPJ[] = $pfpj->Id_Tipo_PFPJ;
            }
        } else {
            foreach ($req->filtrosPFPJ as $pfpj) {
                $PFPJ[] = PFPJ::where('Nome_Tipo_PFPJ', $pfpj)->first()->Id_Tipo_PFPJ;
            }
        }

        if ($req->filtrosAtendimento == null) {
            $req->filtrosAtendimento = TipoAtendimento::all();
            foreach ($req->filtrosAtendimento as $Atendimento) {
                $Atend[] = $Atendimento->Id_Tipo_Atendimento;
            }
        } else {
            foreach ($req->filtrosAtendimento as $Atendimento) {
                $Atend[] = TipoAtendimento::where('Nome_Tipo_Atendimento', $Atendimento)->first()->Id_Tipo_Atendimento;
            }
        }

        if ($req->filtrosRegistro == null) {
            $req->filtrosRegistro = TipoRegistro::all();
            foreach ($req->filtrosRegistro as $TipoRegistro) {
                $Registro[] = $TipoRegistro->Id_Tipo_Registro;
            }
        } else {
            foreach ($req->filtrosRegistro as $TipoRegistro) {
                $Registro[] = TipoRegistro::where('Nome_Tipo_Registro', $TipoRegistro)->first()->Id_Tipo_Registro;
            }
        }

        $datainicial = date('Y-m-d', strtotime($req->datainicial));
        $datafinal = date('Y-m-d', strtotime($req->datafinal));

        $AtendimentosFiltrados = DB::table('atendimento')
            ->join('tipo_atendimento', 'atendimento.Fk_Tipo_Atendimento', '=', 'tipo_atendimento.Id_Tipo_Atendimento')
            ->join('tipo_pfpj', 'atendimento.Fk_Tipo_PFPJ', '=', 'tipo_pfpj.Id_Tipo_PFPJ')
            ->join('tipo_registro', 'atendimento.Fk_Tipo_Registro', '=', 'tipo_registro.Id_Tipo_Registro')
            ->join('motivos', 'atendimento.Fk_Id_Motivo', '=', 'motivos.Id_Motivo')
            ->join('users', 'atendimento.Fk_Id_Atendente', '=', 'users.id')
            ->whereIn('Fk_Tipo_Registro', $Registro)
            ->whereIn('Fk_Tipo_PFPJ', $PFPJ)
            ->whereIn('Fk_Tipo_Atendimento', $Atend)
            ->whereIn('Fk_Id_Motivo', $TodosMotivos)
            ->whereBetween('atendimento.created_at', [$datainicial, $datafinal])
            ->select(
                'atendimento.Nome_Atendido',
                'motivos.Nome_Motivo',
                'tipo_pfpj.Nome_Tipo_PFPJ',
                'tipo_atendimento.Nome_Tipo_Atendimento',
                'tipo_registro.Nome_Tipo_Registro',
                'atendimento.created_at',
                'users.first_name'
            )
            ->get();

        return view('Atendimento/atendimentoRelatorioResultado', [
            'AtendimentosFiltrados' => $AtendimentosFiltrados
        ]);
    }
}
