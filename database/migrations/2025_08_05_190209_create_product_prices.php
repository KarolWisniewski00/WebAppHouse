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
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('flat2_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('flat3_id')->nullable()->constrained()->onDelete('cascade');
            $table->float('old_price');
            $table->float('new_price');
            $table->string('changed_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
