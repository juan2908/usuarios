<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create([
            'Nombre'    =>  'Ivan ferney',
            'Apellidos' => 'Rodriguez Rojas',
            'Correo' => 'ivan_25_marzo@hotmail.com',
            'Telefono' => '3123122540'
        ]);
    }
}
