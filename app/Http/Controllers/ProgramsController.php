<?php

namespace App\Http\Controllers;

use App\Models\programs;
use App\Models\User;
use App\Models\Tontine;
use Illuminate\Http\Request;

class ProgramsController extends Controller
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
         // Récupérer la liste des tontines et des utilisateurs
         $tontines = Tontine::all();
         $users = User::all();
 
         // Passer les données à la vue
         return view('programs-create', compact('tontines', 'users')); // Correction du nom de la vue
 
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
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(programs $programs)
    {
        //
    }
}
