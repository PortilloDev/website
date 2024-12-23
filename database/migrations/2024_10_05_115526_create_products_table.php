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
            $table->string('name');
            $table->longText('description');
            $table->longText('summary')->nullable();
            $table->longText('themes')->nullable();
            $table->string('external_url')->nullable();
            $table->string('image');
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('is_free')->default(false);
            $table->string('slug')->unique();
            $table->foreignId('product_type_id')->constrained()->onDelete('cascade');
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
