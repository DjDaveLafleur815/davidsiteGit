<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact.
     */
    public function showForm()
    {
        return view('contact'); // Assurez-vous que la vue 'contact' existe dans resources/views
    }

    /**
     * Traite la soumission du formulaire de contact.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Enregistrer les données dans la base de données
        Contact::create($validatedData);

        // Envoyer l'email
        Mail::to('ton_adresse_email@gmail.com')->send(new ContactFormMail($validatedData));

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
