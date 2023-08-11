<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Seguridad para la asignacion masiva, solo los siguientes atributos permiitidos
    protected $fillable = ['name', 'price', 'status', 'stock'];

}
