<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $prenom;
    public $email;
    public $contenu;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $prenom, $email, $contenu)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->contenu = $contenu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouveau message de contact')
            ->view('emails.contact');
    }
}
