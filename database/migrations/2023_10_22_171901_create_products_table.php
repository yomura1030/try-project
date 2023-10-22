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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('product_description');
            $table->integer('price')->default(0);
            $table->integer('product_stock')->default(0);
            $table->string('image');
            $table->string('category')->nullabel();
            $table->boolean('is_shopping')->default(false);
            $table->integer('review_star')->default(0)->nullable();
            $table->text('review')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
