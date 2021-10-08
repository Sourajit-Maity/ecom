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
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('production_time_id')->default(1);
            $table->string('title')->nullable();
            $table->integer('quantity')->default(1);
            $table->decimal('payment_price',8,2);
            $table->longText('image')->nullable();
            $table->string('payment_method')->default(1);
            $table->string('shipping_method')->default(1);
            $table->text('names')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1:processing, 2:accepted, 3:cancel, 4:delivered');
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
        Schema::dropIfExists('orders');
    }
}
