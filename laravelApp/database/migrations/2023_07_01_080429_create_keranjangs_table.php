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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('Tharga');
            $table->integer('jumlah');
            $table->integer('diskon');
            $table->string('warna',20);
            $table->string('catatan');
            $table->string('gambar');
            $table->dateTime('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
