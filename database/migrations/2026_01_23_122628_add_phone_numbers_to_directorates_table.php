<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('directorates', function (Blueprint $table) {
            $table->string('phone_number_1', 20)->nullable()->after('name');
            $table->string('phone_number_2', 20)->nullable()->after('phone_number_1');
        });
    }

    public function down(): void
    {
        Schema::table('directorates', function (Blueprint $table) {
            $table->dropColumn(['phone_number_1', 'phone_number_2']);
        });
    }
};
