<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'categoria',
        'categoria_id'
    ];
}
