<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_positions', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('order_id')->nullable();
			$table->foreign('order_id')->references('id')->on('orders');
			$table->unsignedBigInteger('product_id')->nullable();
			$table->foreign('product_id')->references('id')->on('products');
			$table->unsignedBigInteger('status_id')->nullable();
			$table->foreign('status_id')->references('id')->on('order_statuses');
			$table->float('cost_upon_purchase');
			$table->integer('count');
			$table->boolean('whether_paid')->nullable();		// Оплачен ли при получении
			$table->boolean('whether_returned')->nullable();	// Возвращён ли после получения
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
        Schema::dropIfExists('order_positions');
    }
}
