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
        Schema::create('billeteras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->enum('tipo', ['banco', 'efectivo']);
            $table->decimal('saldo', 6, 2)->default(0);;
            $table->string('proposito', 15);
             $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billeteras');
    }
};
