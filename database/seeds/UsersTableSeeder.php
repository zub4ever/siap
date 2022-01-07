<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //php artisan db:seed

             User::create([
            'name'      => 'Alisson Nascimento',
            'email'     => 'alisson.souza@riobranco.ac.gov.br',
            'password' => Hash::make('pikachu123'),
        ]); 
        /*
         User::create([
            'name'      => 'Kaio Almeida',
            'email'     => 'kaio.almeida@riobranco.ac.gov.br',
            'password' => Hash::make('senha'),
        ]);*/
    }
}
