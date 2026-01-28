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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
$table->string('username', 15)->unique();
    $table->string('name', 25);
    $table->string('password', 255);
    $table->dateTime('last_login')->nullable();
    $table->boolean('active')->default(true);
    $table->boolean('admin_web')->default(true);
    $table->string('file_ttd', 255)->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
