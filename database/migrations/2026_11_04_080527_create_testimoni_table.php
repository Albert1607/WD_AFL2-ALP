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
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->constrained('layanan')->cascadeOnDelete();
            $table->string('nama_pelanggan');
            $table->string('jenis_kendaraan');
            $table->tinyInteger('rating')->unsigned()->default(5);
            $table->text('komentar');
            $table->timestamps();

            $table->index('layanan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimoni');
    }
};
