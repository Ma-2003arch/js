<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Affiche le formulaire de contact
    public function create()
    {
        return view('Contact-create');
    }

    // Traite l'envoi du formulaire
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        return redirect()->route('Contact-create')
            ->with('success', 'Votre message a été envoyé avec succès! Nous vous contacterons bientôt.');
    }
}