<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\WorkUsImage;
class CreateWorkUsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_us_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('image_5');
            $table->string('image_6');
            $table->string('image_7');
            $table->timestamps();
        });
        WorkUsImage::create( array(
            'image_1' => '5e3b3a0a50a59.png',
            'image_2'=>'5e3b3a108c66b.png',
            'image_3'=>'5e3b3a24e638c.png',
            'image_4'=>'5e3b3a35494e1.png',
            'image_5'=>'5e3b3a3ced474.png',
            'image_6'=>'5e3b3a35494e1.png',
            'image_7'=>'5e3b3a2b13566.png',

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_us_images');
    }
}
