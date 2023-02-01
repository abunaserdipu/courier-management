<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("receiver_name");
            $table->string("receiver_contact");
            $table->string("receiver_address");
            $table->string("sender_name");
            $table->string("sender_contact");
            $table->string("sender_address");
            $table->tinyInteger("order_type");
            $table->tinyInteger("order_status");
            $table->mediumInteger("order_weight");
            $table->mediumInteger("order_price");
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
        Schema::dropIfExists('orders');
    }
}
