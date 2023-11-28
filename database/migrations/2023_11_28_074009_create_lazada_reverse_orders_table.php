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
        Schema::create('lazada_reverse_orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('order_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->string('buyer_id', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lazada_reverse_orders');
    }
};
