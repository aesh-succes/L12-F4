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
       Schema::create('maintenances', function (Blueprint $table) {
    $table->id();

    $table->foreignId('vehicle_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->date('service_date');
    $table->integer('mileage')->nullable();
    $table->decimal('cost', 15, 2);
    $table->text('issue_description')->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
