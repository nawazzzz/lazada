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
        Schema::create('lazada_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('subjectable');
            $table->string('access_token')->nullable();
            $table->string('refresh_token')->nullable();
            $table->datetime('expires_at')->nullable();
            $table->datetime('refresh_expires_at')->nullable();
            $table->json('user_info')->nullable();
            $table->string('country_code', 5)->nullable();
            $table->string('account_id', 50)->nullable();
            $table->string('account')->nullable();
            $table->string('account_platform', 50)->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lazada_access_tokens');
    }
};
