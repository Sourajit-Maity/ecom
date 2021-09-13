<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('product_category');
            $table->decimal('price',8,2); 
            $table->string('price_range');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->boolean('active')->default(false);            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_prices');
    }
}
