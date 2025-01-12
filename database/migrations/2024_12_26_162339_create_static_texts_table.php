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
        Schema::create('static_texts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('page_id');
            $table->string('page_name')->nullable();
            $table->tinyInteger('section');
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        
        Schema::create('static_text_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('static_text_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['locale', 'static_text_id']);
            $table->foreign('static_text_id')->references('id')->on('static_texts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('static_texts');
        Schema::dropIfExists('static_text_translations');
    }
};
