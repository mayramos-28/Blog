<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('posts', function (Blueprint $table) {
    //         $table->unsignedBigInteger('author_id')->nullable(false);
    //         $table->foreign('author_id')->references('id')->on('users');
    //         $table->unsignedBigInteger('editor_id')->nullable();
    //         $table->foreign('editor_id')->references('id')->on('users');
    //         $table->dropColumn('author_name');           
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            
        });
    }
};
