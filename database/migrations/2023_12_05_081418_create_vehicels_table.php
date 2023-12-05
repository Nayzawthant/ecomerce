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
        Schema::create('vehicels', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('summary');
            $table->longText('future');
            $table->string('price');
            $table->string('liftcapacity');
            $table->string('transmission');
            $table->string('engine');
            $table->string('maximumhp');
            $table->string('starttime');
            $table->string('endtime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicels');
    }
};
