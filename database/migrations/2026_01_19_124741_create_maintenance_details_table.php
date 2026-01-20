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
       Schema::create('maintenance_details', function (Blueprint $table) {
    $table->id();

    $table->foreignId('maintenance_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->foreignId('spare_part_id')->constrained();

    $table->decimal('price', 15, 2);
    $table->integer('quantity');
    $table->decimal('total', 15, 2);

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_details');
    }
};
