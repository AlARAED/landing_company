<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\ChoiceUsItem;


class CreateChoiceUsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice_us_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('text');
            $table->softDeletes();
            $table->timestamps();
        });
        ChoiceUsItem::create( array(
            'title' => 'معايير الجودة ',
            'text'=>'تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث التقنيات وأخر التطورات',
        ));
        ChoiceUsItem::create( array(
            'title' => 'معايير الجودة ',
            'text'=>'تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث التقنيات وأخر التطورات',
        ));
        ChoiceUsItem::create( array(
            'title' => 'معايير الجودة',
            'text'=>'تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث التقنيات وأخر التطورات',
        ));
        ChoiceUsItem::create( array(
            'title' => 'معايير الجودة',
            'text'=>'تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث التقنيات وأخر التطورات',
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choice_us_items');
    }
}
