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
        Schema::create('files', function (Blueprint $table) {
            $table->id();        
            $table->string('filename')->nullable(false);           
            $table->string('fileable_type')->nullable(false);
            $table->unsignedBigInteger('fileable_id')->nullable(false);
            $table->enum(         
                'type',            
                ['image', 'video', 'audio', 'document', 'other']        
            )->nullable(false);
            $table->enum(         
                'owner_type',            
                ['post', 'user', 'profile', 'web', 'other']                    
            )->nullable(false);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
