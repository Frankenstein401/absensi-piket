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
        Schema::create('guru_presensi_log', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('guru_id')
                ->constrained('guru', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('guru_mapel_id')
                ->constrained('guru_mapel', 'id')
                ->onDelete('cascade');

            $table->date('tanggal');
            $table->integer('jam_ket')->default(1);
            $table->enum('action', ['masuk', 'keluar']);
            $table->dateTime('waktu');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('foto_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_presensi_log');
    }
};
