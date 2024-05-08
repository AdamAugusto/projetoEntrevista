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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreignId('situacao_id')->references('id')->on('situacaos')->onDelete('cascade');
            $table->String('titulo');
            $table->longText('descricao');
            $table->String('data_solucao')->nullable();
            $table->String('prazo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
