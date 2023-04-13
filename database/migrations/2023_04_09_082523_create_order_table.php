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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_id')->unique();
            $table->dateTime('order_date');
            $table->enum('order_status', ['pending', 'confirmed', 'shipped', 'delivered'])->default('pending');
            $table->integer('item_count');
            $table->decimal('total_price', 10, 2);
            $table->string('alamat_pengiriman');
            $table->string('metode_pembayaran');
            $table->string('nama_customer');
            $table->string('telepon');
            $table->text('deskripsi_textil');
            $table->string('location');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
