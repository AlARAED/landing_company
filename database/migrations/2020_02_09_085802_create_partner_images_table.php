<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\PartnerImage;

class CreatePartnerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
        PartnerImage::create( array(
            'image' => '5e3fcd850ee61.png',

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_images');
    }
}
