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
        return view('admin.pages.consultores.index');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'desc' => 'required',
            'content' => 'required',
        ]);
        $this->cons->cat_id = $request->cat_id;
        $this->cons->title = $request->title;
        $this->cons->desc = $request->desc;
        $this->cons->content = $request->content;
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
