<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\ChoiceUs;

class CreateChoiceUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text');
            $table->string('image');
            $table->timestamps();
        });
        ChoiceUs::create( array(
            'text' => 'نسعى أن نكون أفضل شركة برمجة وتسويق الكتروني في الشرق الاوسط وذلك بواسطة فريق من المحترفين هدفهم هو رضاك ',
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
        Schema::dropIfExists('choice_us');
    }
}
