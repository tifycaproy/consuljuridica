<?php

use Illuminate\Database\Seeder;
use App\Categorias;

class CategoriasServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categoria = new Categorias();
      $categoria->nombre_categoria = 'Solicitud de documentos a Cuba';
      $categoria->save();

      $categoria = new Categorias();
      $categoria->nombre_categoria = 'Trámites para empresas';
      $categoria->save();

      $categoria = new Categorias();
      $categoria->nombre_categoria = 'Servicios Consulares para ciudadanos Cubanos';
      $categoria->save();

      $categoria = new Categorias();
      $categoria->nombre_categoria = 'Trámites legales y extranjería';
      $categoria->save();
    }
}
