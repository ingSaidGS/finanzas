<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'tipo',
    ];

    // Relaciones
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class, 'id_categoria');
    }

    // Scopes
    public function scopeIngresos($query)
    {
        return $query->where('tipo', 'ingreso');
    }

    public function scopeGastos($query)
    {
        return $query->where('tipo', 'gasto');
    }

}
