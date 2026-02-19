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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('siswa_id')
                ->constrained('siswa', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('guru_mapel_id')
                ->constrained('guru_mapel', 'id')
                ->onDelete('cascade');

            $table->date('tanggal');
            $table->enum('status', ['hadir', 'sakit', 'izin', 'tanpa_keterangan']);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
