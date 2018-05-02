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
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->integer('cate_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->string('guarantee', 100);
            $table->integer('hot')->unsigned();
            $table->decimal('price', 10, 0);
            $table->double('sale_percent', 8, 2);
            $table->integer('quantity')->unsigned();
            $table->text('description');
            $table->integer('status')->unsigned();
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
