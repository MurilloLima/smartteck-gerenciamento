<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    private $lista;
    public function __construct(Lista $lista)
    {
        $this->lista = $lista;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.consultores.lista.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.consultores.lista.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'valorde' => 'required',
            'valorate' => 'required',
            'diasatrasode' => 'required',
            'diasatraso' => 'required',
            'diasvenctode' => 'required',
            'diasvenctoate' => 'required',
            'tipo_negocio' => 'required',
            'data_ultimo_contato' => 'required',
            'diasultimocontato' => 'required',
            '' => 'required',
            'tipo_evento_ultimo_contato' => 'required',
            'id_evento' => 'required',
            'incluir_parcelas_acordos_pendentes' => 'required',
            'diascadastrodiv1' => 'required',
            'diascadastrodiv2' => 'required',
            'forcar_aleatoriedade' => 'required',
            'ordenacaoprimaria' => 'required',
            'ordenacaosecundaria' => 'required',
            'manter_devedor_sem_followup_lista' => 'required',
            'cliente_sem_nenhum_email_cadastrado' => 'required',
            'cliente_sem_nenhum_telefone_cadastrado' => 'required',
            'tipo_pessoa' => 'required',
            'tipo_cobranca' => 'required',
            'ajuizado' => 'required',
            'sequenciade' => 'required',
            'sequenciaate' => 'required',
            'idade_devedor' => 'required',
            'idade_devedor_ate' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'acao_bloqueio_ajuizamento' => 'required',
            'limite_registros' => 'required',
            'situacao' => 'required',

        ]);
        $this->lista->name = $request->name;
        $this->lista->valorde = $request->valorde;
        $this->lista->valorate = $request->valorate;
        $this->lista->diasatrasode = $request->diasatrasode;
        $this->lista->diasatraso = $request->diasatraso;
        $this->lista->diasvenctode = $request->diasvenctode;
        $this->lista->diasvenctoate = $request->diasvenctoate;
        $this->lista->tipo_negocio = $request->tipo_negocio;
        $this->lista->data_ultimo_contato = $request->data_ultimo_contato;

        $this->lista->data_ultimo_contato = $request->data_ultimo_contato;
        $this->lista->diasultimocontato = $request->diasultimocontato;
        $this->lista->diasultimocontato = $request->name;
        $this->lista->tipo_evento_ultimo_contato = $request->name;
        $this->lista->id_evento = $request->name;
        $this->lista->incluir_parcelas_acordos_pendentes = $request->name;
        $this->lista->diascadastrodiv1 = $request->name;
        $this->lista->diascadastrodiv2 = $request->name;
        $this->lista->forcar_aleatoriedade = $request->name;
        $this->lista->ordenacaoprimaria = $request->name;
        $this->lista->ordenacaosecundaria = $request->name;
        $this->lista->manter_devedor_sem_followup_lista = $request->name;
        $this->lista->cliente_sem_nenhum_email_cadastrado = $request->name;
        $this->lista->cliente_sem_nenhum_telefone_cadastrado = $request->name;
        $this->lista->tipo_pessoa = $request->name;
        $this->lista->tipo_cobranca = $request->name;
        $this->lista->ajuizado = $request->name;
        $this->lista->sequenciade = $request->name;
        $this->lista->sequenciaate = $request->name;
        $this->lista->idade_devedor = $request->name;
        $this->lista->idade_devedor_ate = $request->name;
        $this->lista->cidade = $request->name;
        $this->lista->estado = $request->name;
        $this->lista->acao_bloqueio_ajuizamento = $request->name;
        $this->lista->limite_registros = $request->name;
        $this->lista->situacao = $request->name;
        $this->lista->save();
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
