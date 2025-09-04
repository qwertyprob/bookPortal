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
        //Book
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('published_year');
            $table->integer('pages');
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });

        //Author
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        //Book Author многие ко многим
        Schema::create('author_book', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['book_id', 'author_id']); // составной ключ
        });

        //Genre
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        //Book Genre ногие ко многим
        Schema::create('book_genre', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['book_id', 'genre_id']);
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_genre');
        Schema::dropIfExists('genres');

        Schema::dropIfExists('book_author');
        Schema::dropIfExists('authors');

        Schema::dropIfExists('books');
    }
};
