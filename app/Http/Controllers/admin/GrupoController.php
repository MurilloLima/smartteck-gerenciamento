<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Consultor;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    private $grupo;
    public function __construct(Grupo $grupo)
    {
        $this->grupo = $grupo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.consultores.grupo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.consultores.grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'exibircons' => 'required',
            'exibirparc' => 'required',
            'manual' => 'required',
            'valormeta' => 'required',
            'tipocomissao' => 'required',
            'percentualcomissao' => 'required',
            'recibo' => 'required',
            'qtde_dias_para_incluir_reagendamentos_pendentes_lista' => 'required',
            'permite_limpar_transacao_como_consultor' => 'required',
            'permite_inativar_devedor_como_consultor' => 'required',
            'permite_pesquisa_por_situacao_devedor_como_consultor' => 'required',
            'permite_upload_boleto_manual_como_consultor' => 'required',
            'id_evento_reagendamento' => 'required',
            'permite_reagendamento_para_outros_consultores' => 'required',
            'exibir_relatorio_financeiro_do_consultor' => 'required',
            'permite_cadastro_devedores_dividas' => 'required',
            'permite_vis_dashboard_devedor' => 'required',
            'situacao' => 'required',
        ]);
        $this->grupo->name = $request->name;
        $this->grupo->desc = $request->desc;
        $this->grupo->list1 = $request->list1;
        $this->grupo->list2 = $request->list2;
        $this->grupo->list3 = $request->list3;
        $this->grupo->exibircons = $request->exibircons;
        $this->grupo->exibirparc = $request->exibirparc;
        $this->grupo->manual = $request->manual;
        $this->grupo->valormeta = $request->valormeta;
        $this->grupo->manual = $request->manual;
        $this->grupo->valormeta = $request->valormeta;
        $this->grupo->tipocomissao = $request->tipocomissao;
        $this->grupo->percentualcomissao = $request->percentualcomissao;
        $this->grupo->recibo = $request->recibo;
        $this->grupo->qtde_dias_para_incluir_reagendamentos_pendentes_lista = $request->qtde_dias_para_incluir_reagendamentos_pendentes_lista;
        $this->grupo->permite_limpar_transacao_como_consultor = $request->permite_limpar_transacao_como_consultor;
        $this->grupo->permite_inativar_devedor_como_consultor = $request->permite_inativar_devedor_como_consultor;
        $this->grupo->permite_pesquisa_por_situacao_devedor_como_consultor = $request->permite_pesquisa_por_situacao_devedor_como_consultor;
        $this->grupo->permite_upload_boleto_manual_como_consultor = $request->permite_upload_boleto_manual_como_consultor;
        $this->grupo->id_evento_reagendamento = $request->id_evento_reagendamento;
        $this->grupo->permite_reagendamento_para_outros_consultores = $request->permite_reagendamento_para_outros_consultores;
        $this->grupo->exibir_relatorio_financeiro_do_consultor = $request->exibir_relatorio_financeiro_do_consultor;
        $this->grupo->permite_cadastro_devedores_dividas = $request->permite_cadastro_devedores_dividas;
        $this->grupo->permite_vis_dashboard_devedor = $request->permite_vis_dashboard_devedor;
        $this->grupo->situacao = $request->situacao;
        $this->grupo->save();
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
