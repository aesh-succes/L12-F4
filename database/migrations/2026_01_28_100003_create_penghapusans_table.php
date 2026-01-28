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
    Schema::create('penghapusans', function (Blueprint $table) {
        $table->id();

        $table->foreignId('kendaraan_id')
            ->constrained('kendaraans')
            ->cascadeOnDelete();

        $table->date('tgl');
        $table->string('no_sk');
        $table->text('memo')->nullable();

        // audit
        $table->foreignId('input_by')->nullable()->constrained('admins');
        $table->timestamp('input_date')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghapusans');
    }
};
