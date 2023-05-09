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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_id')->constraid('apps');
            $table->foreignId('user_type_id')->constraid('user_types');
            $table->bigInteger('parent_id');
            $table->string('menu', '50');
            $table->string('route', '191');
            $table->string('icon', '80');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
