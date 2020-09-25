<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProductsTable
 */
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('link', 100)->unique('link');
            $table->boolean('published')->default(0);
            $table->boolean('availability')->default(1);
            $table->string('code', 100)->nullable();
            $table->mediumInteger('price' )->default(0);
            $table->mediumInteger('old_price')->default(0);
            $table->bigInteger('category_id');
            $table->mediumInteger('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }

}
