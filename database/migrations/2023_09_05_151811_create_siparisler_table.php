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
        Schema::create('siparisler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('musteri_id');
            $table->unsignedBigInteger('urun_id');
            $table->string('siparis_durumu')->default('Beklemede');
            $table->timestamps();

            $table->foreign('musteri_id')->references('id')->on('musteriler');
            $table->foreign('urun_id')->references('id')->on('urunler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparisler');
    }
};
