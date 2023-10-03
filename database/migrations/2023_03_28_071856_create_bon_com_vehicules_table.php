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
        Schema::create('bon_com_vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('bon_coms_id');
            $table->foreign('bon_coms_id')->references('id')->on('bon_coms')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bon_com_vehicules');
    }
};
