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
        Schema::create('fakamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fasilitas');
            $table->timestamps();

            $table->foreignId('kamar_id')->constrained('kamars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakamars');
    }
};
