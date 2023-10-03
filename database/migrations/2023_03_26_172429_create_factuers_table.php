<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factuers', function (Blueprint $table) {
            $table->id();
            $table->string('numFacture')->unique();
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
        Schema::dropIfExists('factuers');
    }
};
