<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billetera extends Model
{
    //
    use HasFactory;

    protected $table = 'billeteras';

    protected $fillable = [
        'nombre',
        'tipo',
        'saldo',
        'proposito',
        'activo'
    ];

    // Relaciones
    public function transaccionesOrigen()
    {
        return $this->hasMany(Transaccion::class, 'id_billetera_origen');
    }

    public function transaccionesDestino()
    {
        return $this->hasMany(Transaccion::class, 'id_billetera_destino');
    }

    // Mutators
    public function setBancoAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }

    //Modificadores de Saldo
    public function agregarSaldo($monto)
    {
        $this->saldo += $monto;
        $this->save();
        return $this;
    }
    
    public function restarSaldo($monto)
    {
        $this->saldo -= $monto;
        $this->save();
        return $this;
    }
}
