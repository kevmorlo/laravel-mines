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
        Schema::create('mines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('longitude', 12, 10);
            $table->decimal('latitude', 12, 10);
            $table->biginteger('concession_id');

            $table->foreign('concession_id')->references('id')->on('concessions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mines');
    }
};
