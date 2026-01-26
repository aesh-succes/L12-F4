<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_detail_temps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temp_id')->nullable();
            $table->unsignedBigInteger('detail_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('spare_part');
            $table->decimal('price', 12, 2);
            $table->integer('quantity');
            $table->decimal('total_price', 12, 2);
            $table->string('username');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_detail_temps');
    }
};
