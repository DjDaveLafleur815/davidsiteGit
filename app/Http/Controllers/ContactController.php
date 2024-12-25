<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        \Log::info('Form submitted'); // Ajouter un log ici pour vérifier
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'contenu' => 'required',
        ]);

        // Envoyer l'email via Mailpit
        Mail::to('davidantoine815@yahoo.com')->send(new ContactMail($request->all()));

        // Rediriger l'utilisateur avec un message de succès
        return back()->with('success', 'Votre message a bien été envoyé !');
    }

}
