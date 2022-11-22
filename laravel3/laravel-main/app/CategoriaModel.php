<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "tbCategoria";
    protected $fillable = ['IdCategoria','categoria'];
    public $timestamps = false;
    protected $primaryKey = 'IdCategoria';
}
