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
        Schema::create('healthy_foods', function (Blueprint $table) {
    $table->id();
    $table->string('image')->nullable();
    $table->string('brand');
    $table->string('name');
    $table->integer('price');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthy_foods');
    }
};
