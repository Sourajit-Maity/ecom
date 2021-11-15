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
            $table->string('product_name')->unique();
            $table->string('product_url')->unique();
            $table->string('colour');
            $table->string('size');
            $table->string('matterial');
            $table->boolean('in_stock')->default(true);
            $table->decimal('price',8,2)->nullable(); 
            $table->decimal('discount_price',8,2)->nullable(); 
            $table->text('product_description')->nullable();
            $table->text('product_story')->nullable();
            $table->text('product_photo_path')->nullable();
            $table->foreignId('product_category_id');           
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
        Schema::dropIfExists('products');
    }
}
