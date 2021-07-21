<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'=>'Alisson',
            'email'=>'alisson.souza@riobranco.ac.gov.br',
            'password'=>bcrypt('pikachu123'),
        ]);
    }
}
