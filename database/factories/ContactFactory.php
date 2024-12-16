<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->name,
            'email' => $this->faker->email,
            'contenu' => $this->faker->text,
        ];
    }
}
