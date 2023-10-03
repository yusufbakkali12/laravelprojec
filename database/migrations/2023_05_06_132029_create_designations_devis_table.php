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
        Schema::create('designations_devis', function (Blueprint $table) {
            $table->id();
            $table->string('D_numDevis');
            $table->string('Designation');
            $table->string('PrixUniter');
            $table->string('PrixTotal');
            $table->string('Qte');
            $table->string('Unite');
            $table->unsignedBigInteger('devis_id');
            $table->foreign('devis_id')->references('id')->on('devis')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations_devis');
    }
};
