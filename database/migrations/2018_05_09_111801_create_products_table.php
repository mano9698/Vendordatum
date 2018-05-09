<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->bigInteger('user_id')->unique();
            $table->string('title');
            $table->string('product_name');
            $table->string('product_id');
            $table->string('description');
            $table->tinyInteger('availability');
            $table->string('price');
            $table->string('product_pic');
            $table->string('product_doc');
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
