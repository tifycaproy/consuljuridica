<?php

use Illuminate\Database\Seeder;
use App\Configuraciones;

class ConfiguracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comun = new Configuraciones();
        $comun->name = 'politica_privacidad';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'telefono';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'email';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'direccion';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'ubicacion';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'facebook';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'twitter';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'instagram';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'descripcion';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'meta_description';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'meta_name';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'meta_url';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'title';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'video';
        $comun->id_user = '0';
        $comun->save();

        $comun = new Configuraciones();
        $comun->name = 'text_video';
        $comun->id_user = '0';
        $comun->save();

    }
}
