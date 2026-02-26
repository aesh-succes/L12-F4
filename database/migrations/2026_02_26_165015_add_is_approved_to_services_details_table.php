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
        // Cek dulu apakah kolom sudah ada di tabel 'services' sebelum menambahkannya
        if (Schema::hasTable('services') && !Schema::hasColumn('services', 'is_approved')) {
            Schema::table('services', function (Blueprint $table) {
                $table->boolean('is_approved')->default(false);
            });
        }

        // Tambahkan ke 'service_details'
        if (Schema::hasTable('service_details') && !Schema::hasColumn('service_details', 'is_approved')) {
            Schema::table('service_details', function (Blueprint $table) {
                $table->boolean('is_approved')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            if (Schema::hasColumn('services', 'is_approved')) {
                $table->dropColumn('is_approved');
            }
        });

        Schema::table('service_details', function (Blueprint $table) {
            if (Schema::hasColumn('service_details', 'is_approved')) {
                $table->dropColumn('is_approved');
            }
        });
    }
};