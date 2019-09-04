<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string("product_name");
            $table->unsignedBigInteger("category_id");
            $table->string("detail");
            $table->decimal("price");
            $table->integer("status");
            $table->binary("images");
            $table->Date("date");
            $table->decimal("priceNew");
            $table->unsignedTinyInteger("active")->default(1);
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
        Schema::dropIfExists('Product');
    }
}
