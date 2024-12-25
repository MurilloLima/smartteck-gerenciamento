<?php

namespace App\Http\Controllers;

use App\Models\Maladireta;
use Illuminate\Http\Request;

class MaladiretaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.maladireta.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Maladireta $maladireta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maladireta $maladireta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maladireta $maladireta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maladireta $maladireta)
    {
        //
    }
}
