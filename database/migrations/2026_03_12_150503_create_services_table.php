<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('category', ['SR', 'GL']);
            $table->text('short_description');
            $table->longText('full_description');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->decimal('base_price', 10, 2)->nullable();
            $table->integer('display_order')->default(0);
            $table->json('advantages')->nullable();
            $table->json('process_steps')->nullable();
            $table->json('faq')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
