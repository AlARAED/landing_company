<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\CompanyInformation;

class CreateCompanyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_information', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('linkedin');
            $table->string('fb');
            $table->string('google');
            $table->string('twitter');
            $table->string('country');
            $table->integer('no_client');
            $table->integer('satisfy_client');
            $table->integer('no_emplyee');
            $table->integer('exp_year');
            $table->text('about_us');
            $table->string('image');
            $table->timestamps();
        });

        CompanyInformation::create( array(
            'name' => 'سهال ويب',
            'phone' => 'xxx_xxx_xxx',
            'email' => 'examplexxx@e.com',
            'website' => 'websitexxxxx.com',
            'linkedin' => 'linkedin.com',
            'fb' => 'facebook.com',
            'google' => 'google.com',
            'twitter' => 'twitter.com',
            'country' => 'فلسطين',
            'no_client' => '100',
            'satisfy_client' => '80',
            'no_emplyee' => '200',
            'exp_year' => '17',
            'about_us' => 'نحن شركة تصميم العلامات التجارية والتي تجعل التحولات التجارية. نعبر عن أفكارك واحتياجاتك التجارية رقميا ونربط عملائك عاطفيا وبصريا. من خلال الأشخاص الموهوبين لدينا وتجربتهم الرائعة ، لدينا القدرة على فهم رؤى أصحاب الأعمال وتقديم رسالة أعمالهم بصريا بأفضل طريقة.',
            'image'=>'5e317ffa399f1.png',


        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_information');
    }
}
