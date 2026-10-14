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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id')->constrained('kendaraans')->cascadeOnDelete();
            $table->string('nama_penyewa');
            $table->date('tanggal_mulai');
            $table->integer('lama_sewa',1);
            $table->integer('total_biaya');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
