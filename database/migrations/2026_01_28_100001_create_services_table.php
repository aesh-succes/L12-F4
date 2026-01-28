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
    Schema::create('services', function (Blueprint $table) {
        $table->id();

        $table->foreignId('kendaraan_id')
            ->constrained('kendaraans')
            ->cascadeOnDelete();

        $table->date('tgl_service');
        $table->integer('km_service')->nullable();

        $table->decimal('biaya', 15, 2)->default(0);

        $table->text('note')->nullable();

        // AUDIT
        $table->foreignId('input_by')->nullable()->constrained('admins');
        $table->timestamp('input_date')->nullable();

        $table->foreignId('change_by')->nullable()->constrained('admins');
        $table->timestamp('change_date')->nullable();

        $table->integer('edit_number')->default(0);

        // NOTA DINAS
        $table->string('no_register')->nullable();
        $table->date('tgl_next_service')->nullable();
        $table->date('tgl_nota_dinas')->nullable();
        $table->string('nota_dinas')->nullable();

        $table->text('kata_pengantar')->nullable();

        $table->string('nama')->nullable();
        $table->string('nip')->nullable();
        $table->string('jabatan')->nullable();
        $table->text('tembusan')->nullable();

        $table->boolean('approve')->default(false);

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
