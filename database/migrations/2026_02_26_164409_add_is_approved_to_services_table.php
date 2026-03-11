<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->boolean('is_approved')->default(false);
        });

        Schema::table('service_details', function (Blueprint $table) {
            $table->boolean('is_approved')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('is_approved');
        });

        Schema::table('service_details', function (Blueprint $table) {
            $table->dropColumn('is_approved');
        });
    }
};