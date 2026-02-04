<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {

            // BAST
            $table->string('bast_number')->nullable()->after('license_plate');
            $table->date('bast_date')->nullable()->after('bast_number');

            // Pemakai
            $table->string('user_phone')->nullable()->after('position_id');

            // Pajak & STNK
            $table->date('stnk_5_year_due_date')->nullable()->after('stnk_due_date');
            $table->decimal('stnk_5_year_cost', 15, 2)->nullable()->after('stnk_cost');

            // Kondisi
            $table->string('body_condition')->nullable();
            $table->string('engine_condition')->nullable();

            // Status kendaraan
            $table->boolean('is_locked')->default(false);
            $table->boolean('has_kir')->default(false);
            $table->boolean('has_insurance')->default(false);

            // Catatan
            $table->text('memo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn([
                'bast_number',
                'bast_date',
                'user_phone',
                'stnk_5_year_due_date',
                'stnk_5_year_cost',
                'body_condition',
                'engine_condition',
                'is_locked',
                'has_kir',
                'has_insurance',
                'memo',
            ]);
        });
    }
};
