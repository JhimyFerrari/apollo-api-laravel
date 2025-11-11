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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('bairro', 45);
            $table->string('numero', 10);
            $table->string('complemento', 45)->nullable();
            $table->char('cep', 8);
            $table->char('municipio_codigo_ibge', 7);
            $table->timestamps();

            $table->foreign('municipio_codigo_ibge')
                ->references('codigo_ibge')
                ->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
