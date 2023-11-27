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
        Schema::create('lazada_sellers', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('company_name')->nullable();
            $table->string('short_code')->nullable();
            $table->string('location')->nullable();
            $table->string('country_code', 5)->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('cross_border')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lazada_sellers');
    }
};
