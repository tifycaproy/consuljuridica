<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // La creación de datos de roles debe ejecutarse primero
       $this->call(RoleTableSeeder::class);
      // Los usuarios necesitarán los roles previamente generados
       $this->call(UserTableSeeder::class);
      //Control de los Sliders
    //$this->call(SliderSeeder::class);
    //Control de las Noticias
     //$this->call(NoticiaSeeder::class);
    }
}
