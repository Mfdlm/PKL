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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('nama_usaha');
            $table->string('no_hp');
            $table->json('jenis_kelamin'); // Mengubah jenis_kelamin menjadi tipe data JSON
            $table->string('alamat_usaha');
            $table->bigInteger('kecamatan_id');
            $table->bigInteger('kelurahan_id');
            $table->bigInteger('jenispelatihan_id');
            $table->string('nama_Kel');
            $table->string('thn_pelatihan');
            $table->bigInteger('sektorusaha_id');
            $table->bigInteger('skpdpengampu_id');
            $table->string('plth_yg_prnh_ikut');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};

