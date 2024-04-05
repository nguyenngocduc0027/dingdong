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
        Schema::create('nhatros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acreage');
            $table->bigInteger('price');
            $table->integer('n_floor')->nullable();
            $table->integer('n_room')->nullable();
            $table->integer('room_in_floor')->nullable();
            $table->string('address');
            $table->json('images')->nullable();
            $table->string('status');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhatros');
    }
};
