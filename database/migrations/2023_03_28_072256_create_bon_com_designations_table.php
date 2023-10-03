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
        Schema::create('bon_com_designations', function (Blueprint $table) {
            $table->id();
            $table->string('Qte');
            $table->string('Designation');
            $table->string('Reference');
            $table->string('Marce');
            $table->unsignedBigInteger('bon_com_vehicules_id');
            $table->foreign('bon_com_vehicules_id')->references('id')->on('bon_com_vehicules')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bon_com_designations');
    }
};
