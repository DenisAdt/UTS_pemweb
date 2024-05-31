<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) { // Changed 'products' to 'patients'
            $table->id();
            $table->string('name'); // Changed 'title' to 'name'
            $table->string('age'); // Added 'age' field
            $table->string('gender'); // Added 'gender' field
            $table->text('address'); // Changed 'description' to 'address'
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
