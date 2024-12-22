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
        // Valider les données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contenu' => 'required|string',
        ]);

        // Enregistrer dans la base de données
        Contact::create($validated);

        // Retourner un message de succès
        return redirect()->route('contact.show')->with('success', 'Votre message a bien été envoyé !');
    }
}
