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
        Schema::create('users_migration', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->string('email')->unique();
            $table->string('provinsi');
            $table->date('tgllhr');   
            $table->binary('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_migration');
    }
};
