<?php

namespace App\Http\Controllers;

use App\Models\Tontine;
use Illuminate\Http\Request;

class TontineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tontine-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'nullable',
            'montant' => 'required|numeric',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tontine $tontne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tontine $tontne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tontine $tontne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tontine $tontne)
    {
        //
    }
}
