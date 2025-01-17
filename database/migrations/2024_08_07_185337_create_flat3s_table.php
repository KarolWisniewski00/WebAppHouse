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
        Schema::create('flat3s', function (Blueprint $table) {
            $table->id();
            $table->string('segment');
            $table->string('flat');
            $table->float('surface');
            $table->float('price_surface');
            $table->string('status');
            $table->float('price');
            $table->string('file_pdf')->nullable();
            $table->string('file_priv')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat3s');
    }
};
