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
        Schema::create('guru_piket', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('hari_piket', ['senin', 'selasa', 'rabu', 'kamis', 'jumat']);

            $table->foreignUuid('guru_id')
                ->constrained('users', 'id')
                ->onDelete('cascade');

            $table->integer('urutan')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_piket');
    }
};
