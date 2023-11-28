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
        Schema::create('lazada_orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->string('status', 50)->nullable();
            $table->json('statuses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lazada_orders');
    }
};
