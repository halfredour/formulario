<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'id' => '1',
            'nombre' => 'Alfredo',
            'apellido' => 'Ugarte',
            'dni' => '564645533E',
            'correo' => 'alfredo@gmail.com',
            'telefono' => '48363464'
        ]);


        Usuario::create([
            'id' => '2',
            'nombre' => 'Pedro',
            'apellido' => 'Martínez',
            'dni' => '5646464646S',
            'correo' => 'pedro@gmail.com',
            'telefono' => '4579373449'
        ]);
    }
}
