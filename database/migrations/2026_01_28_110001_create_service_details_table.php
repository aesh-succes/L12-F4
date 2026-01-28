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
    Schema::create('service_details', function (Blueprint $table) {
        $table->id();

        $table->foreignId('service_id')
            ->constrained('services')
            ->cascadeOnDelete();

        $table->foreignId('suku_cadang_id')
            ->constrained('suku_cadangs')
            ->cascadeOnDelete();

        $table->decimal('harga', 15, 2);
        $table->integer('jumlah');
        $table->decimal('total', 15, 2);

        $table->boolean('approve')->default(false);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
