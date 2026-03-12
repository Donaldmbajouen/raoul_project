<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client')->nullable();
            $table->date('project_date');
            $table->string('location')->nullable();
            $table->string('domain')->nullable();
            $table->string('category');
            $table->text('short_description');
            $table->longText('context');
            $table->longText('summary');
            $table->string('hero_image');
            $table->json('features')->nullable();
            $table->json('benefits')->nullable();
            $table->json('target_audience')->nullable();
            $table->json('gallery')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
