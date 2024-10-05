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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_h1');
            $table->string('title_h2');
            $table->longText('main_paragraph')->nullable();
            $table->longText('secondary_paragraph')->nullable();
            $table->longText('extract')->nullable();
            $table->string('main_image');
            $table->string('secondary_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
