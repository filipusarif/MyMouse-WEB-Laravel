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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('brand',15);
            $table->string('nama');
            $table->integer('harga');
            $table->integer('diskon');
            $table->integer('terdiskon');
            $table->string('jenis',30);
            $table->string('gambar',100);
            $table->string('gambar2',100);
            $table->string('gambar3',100);
            $table->string('gambar4',100);
            $table->integer('stok');
            $table->integer('terjual');
            $table->string('deskripsi');
            $table->dateTime('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
