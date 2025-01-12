<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = ['Nombre', 'Calorias', 'Carbohidratos', 'Proteinas', 'Lipidos'];

    public function alimentos()
    {
        return $this->hasMany(Alimentos::class, 'categoria_id');
    }
}