<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Order', function (Blueprint $table) {
            $table->foreign("customer_id")->references("customer_id")->on("Customer");
            $table->foreign("product_id")->references("product_id")->on("Product");
            $table->foreign("employees_id")->references("employees_id")->on("Employees");
           // $table->foreign("tableorder_id")->references("tableorder_id")->on("Tableorder");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Order', function (Blueprint $table) {
            $table->dropForeign(["customer_id"]);
            $table->dropForeign(["product_id"]);
            $table->dropForeign(["employees_id"]);
            //$table->dropForeign(["tableorder_id"]);


        });
    }
}
