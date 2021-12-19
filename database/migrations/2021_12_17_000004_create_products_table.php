<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
			$table->unsignedBigInteger('category_id')->nullable();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->unsignedBigInteger('provider_id')->nullable();
			$table->foreign('provider_id')->references('id')->on('product_providers');
			$table->string('name')->index();
			$table->integer('avalible_count');
			$table->integer('guarantee_period');		// Срок гарантии в днях
			$table->integer('age_limit');
			$table->boolean('whether_archival');
			$table->boolean('avalible_for_order');
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
