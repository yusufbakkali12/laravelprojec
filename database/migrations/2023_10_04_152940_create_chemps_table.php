<?php
use App\Models\Templent;
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
        Schema::create('chemps', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('value');
            $table->string('libel');
            $table->boolean('status');            
            $table->string('postion');            
            $table->boolean('oblige'); 
            $table->foreignIdFor(Templent::class);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chemps');
    }
};
