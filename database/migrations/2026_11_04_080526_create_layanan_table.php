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
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori_layanan')->cascadeOnDelete();
            $table->string('nama_layanan');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->decimal('harga_mulai', 10, 2);
            $table->string('estimasi_durasi');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->index('kategori_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
