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
            $table->string('title');
            $table->longText('description');
            $table->longText('summary')->nullable();
            $table->longText('themes')->nullable();
            $table->foreignId('product_type_id')->constrained('product_types')->onDelete('cascade')->nullable();
            $table->string('external_url')->nullable();
            $table->string('image_url');
            $table->decimal('price', 8, 2)->nullable();
            $table->string('slug');
            $table->string('type');
            $table->timestamps();
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
