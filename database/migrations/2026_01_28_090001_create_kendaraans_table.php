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
      Schema::create('kendaraans', function (Blueprint $table) {
    $table->id();

    $table->foreignId('jenis_kendaraan_id')->constrained()->cascadeOnDelete();
    $table->foreignId('merk_kendaraan_id')->constrained()->cascadeOnDelete();
    $table->foreignId('direktorat_id')->constrained('direktorats')->cascadeOnDelete();
    $table->foreignId('jabatan_id')->nullable()->constrained()->nullOnDelete();

    $table->string('no_polisi', 10)->unique();
    $table->string('no_rangka', 25);
    $table->string('no_mesin', 25);
    $table->date('tgl_stnk')->nullable();
    $table->string('tahun_beli', 4);
    $table->string('warna', 20);

    $table->boolean('active')->default(true);

    $table->string('lat', 32)->nullable();
    $table->string('long', 32)->nullable();
    $table->string('posisi', 255)->nullable();

    $table->text('memo')->nullable();
    $table->string('type', 50)->nullable();
    $table->integer('nilai_perolehan')->nullable();

    $table->string('no_bast', 30)->nullable();
    $table->dateTime('tgl_bast')->nullable();

    $table->string('kondisi_mesin', 15)->nullable();
    $table->string('kondisi_body', 15)->nullable();

    $table->decimal('biaya_stnk', 15, 2)->nullable();
    $table->decimal('biaya_stnk_5_tahun', 15, 2)->nullable();

    $table->boolean('penghapusan')->default(false);
    $table->boolean('lock')->default(false);
    $table->boolean('asuransi')->default(false);

    $table->string('kir', 50)->nullable();
    $table->string('pemakai', 150)->nullable();
    $table->string('no_hp', 15)->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
