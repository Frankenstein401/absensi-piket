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
        Schema::create('pengajuan_izin_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('users');
            $table->date('tanggal_izin');
            $table->enum('jenis_izin', ['sakit','keperluan_keluarga','dinas_luar','pelatihan','lainnya']);
            $table->text('keterangan')->nullable();
            $table->string('lampiran')->nullable();
            $table->enum('status', ['pending','disetujui','ditolak'])->default('pending');
            $table->foreignId('piket_id')->nullable()->constrained('users');
            $table->foreignId('wakil_kepsek_id')->nullable()->constrained('users');
            $table->string('ttd_piket')->nullable();
            $table->string('ttd_wakil_kepsek')->nullable();
            $table->string('ttd_guru')->nullable();
            $table->text('alasan_penolakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_izin_guru');
    }
};
