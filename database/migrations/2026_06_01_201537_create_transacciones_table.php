<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora');
            $table->decimal('monto', 6, 2);
            $table->boolean('transferencia');
            $table->foreignId('id_billetera_origen')->constrained('billeteras');
            $table->foreignId('id_billetera_destino')->nullable()->constrained('billeteras');
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->string('descripcion', 30);
            $table->foreignId('id_user')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
