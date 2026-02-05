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
        Schema::create('deletions', function (Blueprint $table) {
        $table->id(); 

        $table->foreignId('vehicle_id')
            ->constrained('vehicles')
            ->cascadeOnDelete(); 

        $table->dateTime('deleted_at_date'); 
        $table->string('sk_number', 38);    
        $table->text('memo')->nullable();

        $table->string('input_by', 15);     
        $table->dateTime('input_date');      
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deletions');
    }
};
