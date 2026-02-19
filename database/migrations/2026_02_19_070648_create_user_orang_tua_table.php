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
        Schema::create('user_orang_tua', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('wali_id')
                ->constrained('users', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('siswa_id')
                ->constrained('siswa', 'id')
                ->onDelete('cascade');

            $table->enum('hubungan', ['ayah', 'ibu', 'wali']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_orang_tua');
    }
};
