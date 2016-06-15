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
        $usuario->name = "Ed";
        $usuario->email = "picassofb";
        $usuario->password = bcrypt("123456");
        $usuario->perfil = "1";
        $usuario->save();
    }
}
