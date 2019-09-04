<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string("order_name");
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("employees_id");
            $table->unsignedBigInteger("customer_id");
           // $table->unsignedBigInteger("tableorder_id");
            $table->decimal("totalMoney");
            $table->date("date");
            $table->integer("status");
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
        Schema::dropIfExists('Order');
    }
}
