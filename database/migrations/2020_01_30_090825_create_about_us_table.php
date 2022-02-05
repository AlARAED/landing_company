<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\AboutUs;


class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('text');
            $table->string('image');
            $table->timestamps();
        });

        AboutUs::create( array(
           
            'title' => 'شركة تطوير تقنية المعلومات من الجيل التالي ',
            'text' => 'نحن شركة تصميم العلامات التجارية والتي تجعل التحولات التجارية. نعبر عن أفكارك واحتياجاتك التجارية رقميا ونربط عملائك عاطفيا وبصريا. من خلال الأشخاص الموهوبين لدينا وتجربتهم الرائعة ، لدينا القدرة على فهم رؤى أصحاب الأعمال وتقديم رسالة أعمالهم بصريا بأفضل طريقة.',
              'image'=>'5e32addb73b9e.png',


        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
