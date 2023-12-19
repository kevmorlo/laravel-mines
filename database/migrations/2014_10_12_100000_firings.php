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
        Schema::create('firings', function (Blueprint $table) {
            $table->id();
            $table->date('horodatage');
            $table->string('explosive');
            $table->smallinteger('tnt_power');
            $table->smallinteger('sound');
            $table->decimal('longitude');
            $table->decimal('latitude');
            $table->decimal('altitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firings');
    }
};
