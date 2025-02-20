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
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required'
        ]);
        $this->lista->name = $request->name;
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
