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
        Schema::create('project_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('project_category_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_category_id');
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['locale', 'project_category_id']);
            $table->foreign('project_category_id')->references('id')->on('project_categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_category_translations');
        Schema::dropIfExists('project_categories');
    }
};
