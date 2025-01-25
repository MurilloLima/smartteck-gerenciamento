<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Consultor;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
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
        Consultor::create([$request->all()]);
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
