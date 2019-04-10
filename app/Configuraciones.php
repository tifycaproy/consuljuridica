<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    protected $table = 'configuraciones';
    protected $fillable = ['name','content'];
    protected $guarded = ['id'];
}