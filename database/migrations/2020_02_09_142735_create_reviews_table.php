<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Review;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text');
            $table->string('signiture');
            $table->text('image');
            $table->softDeletes();

            $table->timestamps();
        });

        Review::create( array(
            'text' => 'شركة مميزه اتاحت لنا الفرصة للظهور بشكل محترم و منتج
                      لما نقدمه سواء في محركات البحث او الموقع نفسه',
            'signiture'=>'خالد محمد على',
            'image'=>'5e40196842d3a.png',
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
