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
        Schema::create('guru_mapel', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('guru_id')
                ->constrained('users', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('mapel_id')
                ->constrained('mapel', 'id')
                ->onDelete('cascade');

            $table->foreignUuid('kelas_id')
                ->constrained('kelas', 'id')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_mapel');
    }
};
