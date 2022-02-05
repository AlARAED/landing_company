<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
        Category::create( array(
            'name' => 'تصميم وتطوير مواقع',

        ));
        Category::create( array(
            'name' => 'تصميم وتطوير تطبيقات موبايل وايفون',

        ));
        Category::create( array(
            'name' => 'فيديو موشن جرافيك',

        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
