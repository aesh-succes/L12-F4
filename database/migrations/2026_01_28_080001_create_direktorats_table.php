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
       Schema::create('direktorats', function (Blueprint $table) {
    $table->id();
    $table->string('direktorat', 100);

    $table->string('no_hp_1', 15)->nullable();
    $table->string('no_hp_2', 15)->nullable();

    $table->foreignId('kota_kab_id')
        ->constrained('kota_kabs')
        ->cascadeOnDelete();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direktorats');
    }
};
