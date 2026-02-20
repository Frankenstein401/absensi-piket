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
        Schema::create('pengajuan_izin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
            $table->date('tanggal_izin');
            $table->enum('jenis_izin', ['sakit','keperluan_keluarga','kegiatan_ekstra','lomba','lainnya']);
            $table->text('keterangan')->nullable();
            $table->string('lampiran')->nullable();
            $table->enum('status', ['pending','disetujui','ditolak'])->default('pending');
            $table->foreignId('piket_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_izin');
    }
};
