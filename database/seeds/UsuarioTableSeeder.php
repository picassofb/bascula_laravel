<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();
        $usuario->nombre = "Ed";
        $usuario->usuario = "picassofb";
        $usuario->contrasena = bcrypt("123456");
        $usuario->save();
    }
}
