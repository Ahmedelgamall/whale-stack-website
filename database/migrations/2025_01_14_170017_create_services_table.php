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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('service_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('locale')->index();
            $table->unique(['locale', 'service_id']);
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_translations');
        Schema::dropIfExists('services');
    }
};
