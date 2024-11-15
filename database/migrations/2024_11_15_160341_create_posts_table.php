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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Campo para el ID del post (autoincrementable)
            $table->string('title'); // Título del post
            $table->text('summary'); // Resumen del post
            $table->longText('content'); // Contenido completo del post
            $table->foreignId('author_id')->constrained('users'); // Referencia al autor (usualmente tabla 'users')
            $table->integer('comment_count')->default(0); // Contador de comentarios
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Estado del post
            $table->boolean('is_visible')->default(true); // Visibilidad del post (si es público)
            $table->timestamps(); // Timestamps (created_at y updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
