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
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('email');
            $table->string('no_hp');
            $table->integer('jumlah_kamar');
            $table->date('check_in');
            $table->date('check_out');
            $table->enum('status', ['pending','approved','done'])->default('pending');
            $table->timestamps();

            $table->foreignId('tipe')->constrained('kamars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_ins');
    }
};
