<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use App\Models\user;
use App\Models\tontine;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
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
        $users = User::all();
        $tontines = tontine::all();
        // $tontines = Tontine::all();
        return view('participant-create', compact('users', 'tontines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tontine_id' => 'required|exists:tontines,id',
            'date_participation' => 'required|date',
        ]);

        Participants::create([
            'user_id' => $request->user_id,
            'tontine_id' => $request->tontine_id,
            'date_participation' => $request->date_participation,
        ]);

        return redirect()->route('participant-create')->with('success', 'Participation enregistrée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participants $participants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participants $participants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participants $participants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participants $participants)
    {
        //
    }
}
