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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('address')->nullable(); 
            $table->string('city')->nullable(); 
            $table->string('state')->nullable(); 
            $table->date('birthdate')->nullable(); 
            $table->string('gender')->nullable(); 
            $table->string('nationality')->nullable(); 
            $table->string('id_document_type')->nullable(); 
            $table->string('id_document_number')->nullable(); 
            $table->text('notes')->nullable(); 
            $table->boolean('is_active')->default(true); 
            $table->timestamps(); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
