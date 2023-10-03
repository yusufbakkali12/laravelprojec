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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('D_numFacture');
            $table->string('Designation');
            $table->string('PrixUniter');
            $table->string('PrixTotal');
            $table->string('Qte');
            $table->string('Unite');
            $table->unsignedBigInteger('factuers_id');
            $table->foreign('factuers_id')->references('id')->on('factuers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
