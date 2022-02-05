<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\WorkUs;
class CreateWorkUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('text');
            $table->timestamps();
        });
        WorkUs::create( array(
            'title' => 'محفظة الإبداعية ',
            'text'=>'نخلق تجارب رائعة وتصميمات تفاعلية تدعم الوعي بهوية العلامة التجارية وتبحث عن تصميمات إبداعية وفريدة من نوعها لتبرز قصصك؟ هنا يمكنك أن تبدأ! الحصول على إلهام مع عملنا.

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
        Schema::dropIfExists('work_us');
    }
}
