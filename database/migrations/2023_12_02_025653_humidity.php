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
        Schema::create('humidity', function (Blueprint $table) {
            $table->id();
            $table->float('temp_f',8,1);
            $table->float('temp_c',8,1);
            $table->float('humidity',8,1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('humidity');
    }
};
