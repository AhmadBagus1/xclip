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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            // Basic information
            $table->string('title');
            $table->string('slug')->unique();

            // News content
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();

            // Category
            $table->string('category');

            // Thumbnail
            $table->string('thumbnail')->nullable();

            // Author
            $table->string('author')->nullable();

            // Publication date
            $table->timestamp('published_at')->nullable();

            // Website visibility
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
