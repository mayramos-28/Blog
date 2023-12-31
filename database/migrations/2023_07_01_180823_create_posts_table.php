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
            $table->id();
            $table->string('slug')->unique()->nullable(false);
            $table->string('title')->nullable(false);
            $table->text('content')->nullable(false);;            
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->boolean('is_published')->default(false);
            $table->string('image')->nullable(true);
            $table->string('author_name')->nullable(false);
          
            $table->timestamps();
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
