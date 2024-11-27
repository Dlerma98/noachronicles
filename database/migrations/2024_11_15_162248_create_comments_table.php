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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('content'); // Contenido del comentario
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Autor
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Post relacionado
            $table->foreignId('parent_id')->nullable()->constrained('comments')->onDelete('cascade'); // Respuesta a otro comentario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
