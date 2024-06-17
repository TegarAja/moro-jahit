<?php
// database/migrations/2024_06_13_000000_create_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom user_id untuk mengaitkan dengan user
            $table->string('model_name');
            $table->string('sleeve_model');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->text('customer_address');
            $table->string('material');
            $table->string('selectedImagePath')->nullable();
            $table->string('size_type');
            $table->string('size')->nullable();
            $table->text('additional_description')->nullable();
            $table->json('image_uploads')->nullable();
            // Kolom tambahan untuk ukuran custom
            $table->integer('chest_size')->nullable();
            $table->integer('waist_size')->nullable();
            $table->integer('hip_size')->nullable();
            $table->integer('front_width')->nullable();
            $table->integer('back_width')->nullable();
            $table->integer('shoulder_length')->nullable();
            $table->integer('armhole_size')->nullable();
            $table->integer('sleeve_length')->nullable();
            $table->integer('lower_arm_size')->nullable();
            $table->integer('model_length')->nullable();
            $table->decimal('waist_size_custom', 8, 2)->nullable();
            $table->decimal('hip_size_custom', 8, 2)->nullable();
            // Kolom tambahan untuk ukuran custom celana/rok
            $table->integer('crotch_size')->nullable();
            $table->integer('thigh_size')->nullable();
            $table->integer('knee_size')->nullable();
            $table->integer('ankle_size')->nullable();
            // Kolom tambahan untuk status pembayaran dan status pesanan
            $table->string('status_pembayaran')->default('Belum Membayar');
            $table->string('status_pesanan')->default('Pending');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
            $table->string('payment_proof')->nullable()->after('status_pesanan');

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
