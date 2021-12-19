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
			$table->unsignedBigInteger('user_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users');
			$table->unsignedBigInteger('status_id')->nullable();
			$table->foreign('status_id')->references('id')->on('order_statuses');
			$table->date('date_issue')->index();						// Дата оформления
			$table->date('date_receiving')->index()->nullable();		// Дата получения
			$table->integer('days_storage');							// Сколько дней заказ может храниться
			$table->string('user_comment')->nullable();					// Комментарий от заказчика
			$table->string('staff_comment')->nullable();				// Комментарий от сотрудника для внутреннего использования
			$table->float('total_cost');								// Итоговая стоимость всех позиций в сумме
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
