<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorias extends Model
{
    use HasFactory;



 
    public function alimentos()
    {
        return $this->hasMany(Alimento::class);
}
}