<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Partner;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('text');
            $table->softDeletes();
            $table->timestamps();
        });

        Partner::create( array(
            'title' => 'عملاؤنا سعداء',
            'text'=>'أثناء عرض قائمة عملائنا ، ينضم إلينا عملاء جدد! بعض عملائنا من الشركات الناشئة الصغيرة ، لكنهم ينموون معنا ، من خلال خبرتنا ومشورتنا. نحن فخورون بالعمل مع مجموعة رائعة من العملاء.

',
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
