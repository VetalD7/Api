<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateArticlesLangTable
 */
class CreateArticlesLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_lang', function (Blueprint $table) {
            $table->bigInteger('article_id');
            $table->string('lang', 24);
            $table->string('title',512);
            $table->string('description', 2048);
            $table->text('content');

            $table->unique(['article_id','lang']);
            $table->foreign('article_id')->references('id')->on('articles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_lang');
    }
}
