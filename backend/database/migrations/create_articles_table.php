<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('source_url')->nullable();
            $table->string('version')->default('original');
            $table->unsignedBigInteger('parent_article_id')->nullable();
            $table->timestamps();

            $table->foreign('parent_article_id')
                  ->references('id')->on('articles')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
