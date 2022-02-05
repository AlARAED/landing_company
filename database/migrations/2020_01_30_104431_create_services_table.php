<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Service;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('text');
            $table->string('image');
            $table->timestamps();
        });
        Service::create( array(
           
            'title' => 'ما الذي نفعله ',
            'text' => 'نحن شركة تصميم العلامات التجارية والتي تجعل التحولات التجارية. نعبر عن أفكارك واحتياجاتك التجارية رقميا ونربط عملائك عاطفيا وبصريا. من خلال الأشخاص الموهوبين لدينا وتجربتهم الرائعة ، لدينا القدرة على فهم رؤى أصحاب الأعمال وتقديم رسالة أعمالهم بصريا بأفضل طريقة.  ',
            'image'=>'5e32bdd13fc8b.png',


        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
