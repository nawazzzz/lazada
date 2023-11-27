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
        Schema::create('lazada_messages', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('action', 100)->nullable();
            $table->string('url')->nullable();
            $table->string('request_id', 50)->nullable();
            $table->json('request')->nullable();
            $table->json('response')->nullable();
            $table->string('error')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lazada_messages');
    }
};
