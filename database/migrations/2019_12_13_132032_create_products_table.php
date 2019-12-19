<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('size_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('image')->nullable();
            $table->integer('price')->unsigned()->nullable()->default(0);
            $table->integer('price_sale')->unsigned()->nullable()->default(0);
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->boolean('new')->nullable();
            $table->boolean('highlight')->nullable();
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
