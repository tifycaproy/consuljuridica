<?php

use Illuminate\Database\Seeder;
use App\TiposCampos;

class TiposCamposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Fecha';
      $t_campo->name = 'date';
      $t_campo->save();

      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Texto Corto';
      $t_campo->name = 'text';
      $t_campo->save();

      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Texto Largo';
      $t_campo->name = 'textarea';
      $t_campo->save();

      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Número';
      $t_campo->name = 'number';
      $t_campo->save();

      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Email';
      $t_campo->name = 'email';
      $t_campo->save();

      $t_campo = new TiposCampos();
      $t_campo->tipo_campo = 'Selección Simple';
      $t_campo->name = 'checkbox';
      $t_campo->save();
    }
}
