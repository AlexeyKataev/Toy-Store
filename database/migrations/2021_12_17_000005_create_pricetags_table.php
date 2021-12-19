<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricetagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricetags', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('product_id')->nullable();
			$table->foreign('product_id')->references('id')->on('products');
			$table->float('price');						// Стоимость за 1 шт.
			$table->float('discount_percentage');		// Процент скидки
			$table->date('date_start')->index();		// Дата введения
			$table->date('date_stop')->index();			// Дата завершения
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
        Schema::dropIfExists('pricetags');
    }
}
