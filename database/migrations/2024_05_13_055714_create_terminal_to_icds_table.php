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
        Schema::create('terminal_to_icds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('container_id')->constrained()->onDelete('cascade');
          
            $table->foreignId('truck_id')->constrained()->onDelete('cascade');
            $table->foreignId('icd_id')->constrained()->onDelete('cascade');
            $table->dateTime('departureDate');
            $table->dateTime('arrivalDate')->nullable();
            $table->boolean('isArrived')->default(false);

            $table->timestamps();
            $table->unique('container_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terminal_to_icds');
    }
};
