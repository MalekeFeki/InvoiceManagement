<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use App\Models\Facture;
use App\Models\categorie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures=DB::table('factures')::all();
        return view("factures.factures");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factures.ajouterFacture', compact('factures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('factures')::create([
            'num_facture' => $request->num_facture,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->Due_date,
            'categorie_id' => $request->categorie_id,
            'Payment_date' => $request->Payment_date,
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        
        $factures = DB::table('factures')::where('id', $id)->first();
        return view('factures.factures', compact('factures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factures = DB::table('factures')::where('id', $id)->first();
        return view('factures.edit_facture', compact('factures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $factures =DB::table('factures')::findOrFail($request->id);
        $factures->update([
            'num_facture' => $request->num_facture,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'categorie_id' => $request->categorie_id,
            'Payment_date' => $request->Payment_date,
            
        ]);

        session()->flash('edit', 'facture modifiée');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $factures = DB::table('factures')::where('id', $id)->first();
        DB::table('factures')->where('factures', $id)->delete();

        }

        
   
}