<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Clave foránea hacia `posts`
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Clave foránea hacia `categories`
            $table->timestamps(); // Opcional, por si quieres rastrear cuándo se asignan categorías a los posts
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
