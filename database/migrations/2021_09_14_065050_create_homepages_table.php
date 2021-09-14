<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pages_id')->nullable()->constrained();
            $table->string('banner_heading')->nullable();
            $table->string('banner_sub_heading')->nullable();
            $table->text('banner_content')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('content1_heading')->nullable();
            $table->longText('content1_text')->nullable();
            $table->string('content1_image')->nullable();
            $table->string('content1_subheading')->nullable();
            $table->string('content2_heading')->nullable();
            $table->longText('content2_text')->nullable();
            $table->string('content2_image')->nullable();
            $table->string('content2_option_heading1')->nullable();
            $table->longText('content2_option_text1')->nullable();
            $table->string('content2_option_image1')->nullable();
            $table->string('content2_option_heading2')->nullable();
            $table->longText('content2_option_text2')->nullable();
            $table->string('content2_option_image2')->nullable();
            $table->string('content2_option_heading3')->nullable();
            $table->longText('content2_option_text3')->nullable();
            $table->string('content2_option_image3')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
