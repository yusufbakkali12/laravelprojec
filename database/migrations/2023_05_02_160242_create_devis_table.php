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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('numDevis')->unique();
            $table->string('date');
            $table->string('status')->nullable();
            $table->string('objectCar');
            $table->string('modelCar');
            $table->string('matriqulCar');
            $table->string('kilometrageCar');
            $table->string('MontantHT');
            $table->string('MontantTTC');
            $table->string('MontantTVA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
