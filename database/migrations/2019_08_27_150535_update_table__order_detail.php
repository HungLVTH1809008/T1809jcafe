<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('OrderDetail', function (Blueprint $table) {
            $table->foreign("order_id")->references("order_id")->on("Order");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('OrderDetail', function (Blueprint $table) {
            $table->dropForeign(["order_id"]);

        });
    }
}
