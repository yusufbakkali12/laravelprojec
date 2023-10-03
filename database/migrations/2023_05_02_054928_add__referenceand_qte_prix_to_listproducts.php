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
        Schema::table('listproducts', function (Blueprint $table) {
            $table->string('reference')->nullable();
            $table->string('qte')->nullable();
            $table->string('prix')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listproducts', function (Blueprint $table) {
            //
        });
    }
};
