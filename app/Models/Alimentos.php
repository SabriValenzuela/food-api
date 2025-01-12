<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alimentos extends Model
{
     use HasFactory; 
     protected $table = 'alimentos';

     protected $fillable = ['categoria_id', 'Nombre', 'Gramos', 'Medida_casera'];
 
     public function categoria()
     {
         return $this->belongsTo(Categorias::class, 'categoria_id');
     }
}
