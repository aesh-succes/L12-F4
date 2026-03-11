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
       Schema::create('vehicles', function (Blueprint $table) {
    $table->id();

    $table->foreignId('vehicle_type_id')->constrained();
    $table->foreignId('brand_id')->constrained();
    $table->foreignId('directorate_id')->constrained();
    $table->foreignId('position_id')->constrained();

    $table->string('license_plate')->unique();
    $table->string('chassis_number');
    $table->string('engine_number');
    $table->string('model');
    $table->string('color')->nullable();
    $table->year('purchase_year');
    $table->decimal('acquisition_value', 15, 2);

    $table->date('stnk_due_date');
    $table->decimal('stnk_cost', 15, 2);

    $table->boolean('is_active')->default(true);
    $table->boolean('is_deleted')->default(false);

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

