<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProductStringsTable
 */
class CreateProductStringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_strings', function (Blueprint $table) {
            $table->bigInteger('product_id');
            $table->string('lang', 24);
            $table->string('title',512);
            $table->string('description', 2048);
            $table->text('content');

            $table->unique(['product_id','lang']);
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_strings');
    }
}
