<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Afficher le formulaire de contact
    public function showForm()
    {
        return view('contact');
    }

    // Enregistrer le message dans la base de données et envoyer l'e-mail
    public function submitForm(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Construire les détails de l'e-mail
        $details = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];

        // Enregistrer le message dans la base de données
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Envoyer l'e-mail
        Mail::send('emails.contact', $details, function ($message) use ($details) {
            $message->to('admin@example.com') // Destinataire fictif
            ->subject('Nouveau message de contact')
                ->from($details['email'], $details['name']);
        });

        // Retourner une réponse ou rediriger
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    // Afficher tous les messages enregistrés
    public function showMessages()
    {
        $messages = Contact::all(); // Récupère tous les messages
        return view('messages.index', compact('messages'));
    }
}
