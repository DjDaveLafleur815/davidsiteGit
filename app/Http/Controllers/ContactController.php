<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contenu' => 'required|string',
        ]);

        // Envoyer l'email
        Mail::to('davidantoine815@yahoo.com')->send(new ContactMail(
            $request->nom,
            $request->prenom,
            $request->email,
            $request->contenu
        ));

        // Retourner une réponse de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
