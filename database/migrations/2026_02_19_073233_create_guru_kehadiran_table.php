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
        Schema::create('guru_kehadiran', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('guru_id')
                ->constrained('guru', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('guru_mapel_id')
                ->constrained('guru_mapel', 'id')
                ->onDelete('cascade');

            $table->date('tanggal');
            $table->integer('jam_ke')->default(1);
            $table->enum('status', ['hadir', 'sakit', 'izin', 'tanpa_keterangan']);
            $table->text('keterangan');
            $table->dateTime('waktu_masuk')->nullable();
            $table->dateTime('waktu_keluar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_kehadiran');
    }
};
