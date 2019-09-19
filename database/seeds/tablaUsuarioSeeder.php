<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class tablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$tipoUsuarios = [
            'administrador',
            'usuario'
        ];
        foreach($tipoUsuarios as $key => $value)
        {
            DB::table('usuario')->insert([
                'nickname' => Str::random(3),
                'nombre' => Str::random(10),
                'apellidoPaterno' => Str::random(10),
                'apellidoMaterno' => Str::random(10),
                'contrasenia' => Str::random(4),
                'rol' => $value
            ]);
        }*/

        DB::table('usuario')->insert([
            'usuario' => 'admin',
            'nombre' => 'Brandon',
            'apellidoPaterno' => 'Espinosa',
            'apellidoMaterno' => 'Ramirez',
            'password' => bcrypt('root')
        ]);

        
    }
}
