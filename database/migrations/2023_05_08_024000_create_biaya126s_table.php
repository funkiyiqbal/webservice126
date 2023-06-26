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
        Schema::create('biaya126s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen', 50);
            $table->string('email_konsumen', 50);
            $table->string('jumalah_biaya', 50);
            $table->timestamp('tanggal_transaksi');
            $table->string('keterangan', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya126s');
    }
};
