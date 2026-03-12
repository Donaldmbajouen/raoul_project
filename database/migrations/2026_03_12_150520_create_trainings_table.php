<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->longText('full_description');
            $table->string('image');
            $table->string('duration')->nullable();
            $table->string('level')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->json('features')->nullable();
            $table->json('solutions')->nullable();
            $table->json('pricing_packs')->nullable();
            $table->json('related_services')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
