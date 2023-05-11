<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('juals', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nama', 100);
            $table->string('alamat', 100);
            $table->date('tgljual');
            $table->string('email');
            $table->string('no_hp');
            $table->string('cr_kirim');
            $table->string('status')->default('dalam antrian');
            $table->timestamps();
        });

        Schema::create('konfirmasi_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('id_jual')->nullable();
            $table->string('nama_pengirim', 100);
            $table->date('tgl_pengiriman');
            $table->string('resi_pengiriman');
            $table->binary('foro_resi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juals');
        Schema::dropIfExists('konfirmasi_pengiriman');
    }
};