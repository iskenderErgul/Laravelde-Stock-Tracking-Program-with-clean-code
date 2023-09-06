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
        Schema::create('musteriler', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ad');
            $table->string('soyad');
            $table->string('email')->unique();
            $table->string('sifre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musteriler');
    }
};
