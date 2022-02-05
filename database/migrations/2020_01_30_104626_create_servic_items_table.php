<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\ServicItem;



class CreateServicItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servic_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('text');
            $table->softDeletes();
            $table->timestamps();
        });
           ServicItem::create( array(
            'title' => 'التصميم الجرافيكي',
            'text' => 'نقوم بتقديم خدمات تصميم مميزة لخدمة عملائنا بداية من تصميم الشعارات والبانارات الإعلانية والإعلانات إلى تصميم المطويات والكاتالوجات وحتى إعادة تصميم موقعك بالكامل.',
          
        ));
            ServicItem::create( array(
            'title' => 'تطبيقات الموبايل',
            'text' => 'نقوم بتوفير خدمة برمجة تطبيقات الموبايل لأنظمة اندرويد, اي او اس, ويندوز فون. أيا كانت خدماتك سنقدم لك تطبيق يحسن الخدمة المقدمة بناء على متطلباتك.',
          
        ));
             ServicItem::create( array(
            'title' => 'تطوير وبرمجة مواقع الإنترنت',
            'text' => 'موقعك الإلكتروني هو من أهم عوامل جذب العملاء, هنا في ويب ستدي نحن ملمين بجميع لغات البرمجة وعلى أتم استعداد لتوفير موقع الكتروني ذو طابع مميز للرقي بشركتك.',
          
        ));
              ServicItem::create( array(
            'title' => 'تهيئة المواقع لمحركات البحث',
            'text' => 'نقوم بتقديم خدمات تصميم مميزة لخدمة عملائنا بداية من تصميم الشعارات والبانارات الإعلانية والإعلانات إلى تصميم المطويات والكاتالوجات وحتى إعادة تصميم موقعك بالكامل.',
          
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servic_items');
    }
}
