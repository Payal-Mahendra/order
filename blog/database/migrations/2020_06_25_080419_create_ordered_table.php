<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered', function (Blueprint $table) {
            $table->id();
            $table->String('first_name');
            $table->String('last_name');
            $table->String('phone');
            $table->String('order_id');
            $table->String('order_date');
            $table->String('status');
            $table->String('product');
            $table->String('product_line');
            $table->String('unit_price');
            $table->String('qty');
            $table->String('line_total');
            $table->String('country_code');
            $table->String('bill_amount');
            
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
        Schema::dropIfExists('ordered');
    }
}
