<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111111'),
            'role' => 'admin',
            'societe' => 'Admin Corp', // ✅ Ajout du champ société (optionnel)
            'status' => true, // ✅ Remplacé '1' par true pour le boolean
        ]);

        User::create([
            'name' => 'Formateur',
            'username' => 'formateur',
            'email' => 'formateur@gmail.com',
            'password' => Hash::make('111111'),
            'role' => 'formateur',
            'societe' => 'Formation Academy', // ✅ Exemple de société
            'status' => true, // ✅ Boolean
        ]);

        User::create([
            'name' => 'Stagiaire',
            'username' => 'Stagiaire',
            'email' => 'Stagiaire@gmail.com',
            'password' => Hash::make('111111'),
            'role' => 'stagiaire',
            'societe' => 'Indépendant', // ✅ Optionnel
            'status' => true, // ✅ Boolean
        ]);
    }
}
