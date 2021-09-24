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
            $table->string('name');
            $table->string('slug');
            $table->decimal('1-5',8,2)->nullable();
            $table->decimal('6-15',8,2)->nullable(); 
            $table->decimal('16-25',8,2)->nullable(); 
            $table->decimal('26-50',8,2)->nullable(); 
            $table->decimal('51-100',8,2)->nullable(); 
            $table->decimal('101-199',8,2)->nullable(); 
            $table->decimal('200-499',8,2)->nullable(); 
            $table->decimal('500+',8,2)->nullable(); 
            $table->decimal('magnet',8,2)->nullable(); 
            $table->decimal('pin',8,2)->nullable(); 
            $table->decimal('swivel_clip',8,2)->nullable();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');           
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
