<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Consultor;
use Illuminate\Http\Request;

class ConsultoresController extends Controller
{
    private $cons;
    public function __construct(Consultor $cons)
    {
        $this->cons = $cons;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Consultor::latest()->get();
        return view('admin.pages.consultores.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.consultores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'grupo' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'uf' => 'required',
            'especialodade' => 'required',
            'cod' => 'required',
            'obs' => 'required'
        ]);
        $this->cons->name = $request->name;
        $this->cons->email = $request->email;
        $this->cons->grupo = $request->grupo;
        $this->cons->phone = $request->phone;
        $this->cons->city = $request->city;
        $this->cons->uf = $request->uf;
        $this->cons->especialodade = $request->especialodade;
        $this->cons->cod = $request->cod;
        $this->cons->obs = $request->obs;
        $this->cons->save();
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
