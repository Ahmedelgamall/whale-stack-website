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
            Schema::create('seo_settings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('page_id')->nullable();
            $table->string('page_name')->nullable();
            $table->timestamps();
        });

        Schema::create('seo_setting_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seo_setting_id');
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('locale')->index();
            $table->unique(['locale', 'seo_setting_id']);
            $table->foreign('seo_setting_id')->references('id')->on('seo_settings')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_settings');
        Schema::dropIfExists('seo_setting_translations');
    }
};
