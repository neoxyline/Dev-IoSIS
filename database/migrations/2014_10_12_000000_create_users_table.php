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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('google_id')->unique()->nullable();
            $table->json('user_type')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('nomor_hp')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('nomor_hp_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
