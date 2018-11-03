<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = 'sliders';
  protected $fillable = ['titulo', 'contenido', 'publico', 'posicion', 'url_imagen'];
  protected $guarded = ['id'];
}
