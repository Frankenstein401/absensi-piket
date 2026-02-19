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
        Schema::create('jadwal_mengajar', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('guru_mapel_id')
                ->constrained('guru_mapel', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('kelas_id')
                ->constrained('kelas', 'id')
                ->onDelete('cascade');

            $table->integer('jam_ke')->default('1');
            $table->enum('hari', ['senin', 'selasa', 'rabu', 'kamis', 'jumat']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->enum('semester', ['genap', 'ganjil']);
            $table->string('tahun_ajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mengajar');
    }
};
