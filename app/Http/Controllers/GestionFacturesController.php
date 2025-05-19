<?php

namespace App\Http\Controllers;

use App\Models\Gestion_Factures;
use Illuminate\Http\Request;

class GestionFacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('factures.factures');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestion_Factures  $gestion_Factures
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion_Factures $gestion_Factures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestion_Factures  $gestion_Factures
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion_Factures $gestion_Factures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestion_Factures  $gestion_Factures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion_Factures $gestion_Factures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestion_Factures  $gestion_Factures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion_Factures $gestion_Factures)
    {
        //
    }
}