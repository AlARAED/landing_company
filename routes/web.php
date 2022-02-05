<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
        Route::get('/login','Auth\LoginController@showLoginForm');
Route::group(['middleware' => 'auth'], function () {
        Route::get('/index','HomeController@index');
        Route::get('/account/setting', 'CompanyInformationController@setting');
        Route::get('/about_us', 'AboutUsController@aboutpage');
        Route::post('/update', 'UserController@update_info');
        Route::post('/update/Companyinfo', 'CompanyInformationController@Companyinfo');
        Route::post('/update/about_us', 'AboutUsController@about_us');
        Route::get('/Service', 'ServiceController@servicepage');
        Route::get('/Serviceitem', 'ServivceItemController@Serviceitempage');
        Route::post('update/service', 'ServiceController@update_service');
        Route::post('service/item', 'ServivceItemController@store_serviceitem');
        Route::post('service/item/update/{id}', 'ServivceItemController@update_serviceitem');
        Route::post('service/item/remove/{id}', 'ServivceItemController@delete_serviceitem');
        Route::get('/choiceus', 'ChoiceUsController@choiceuspage');
        Route::post('update/choiceus', 'ChoiceUsController@update_choiceus');
        Route::get('choiceitem', 'ChoiceUsItemController@choiceitempage');
        Route::post('choiceus/item', 'ChoiceUsItemController@store_choiceusitem');
        Route::post('choice/item/update/{id}', 'ChoiceUsItemController@update_choiceitem');
        Route::post('choice/item/remove/{id}', 'ChoiceUsItemController@delete_choiceitem');
        Route::get('/workus', 'WorkUsController@workuspage');
        Route::post('worksus/update', 'WorkUsController@update_workus');
        Route::get('workusitem', 'WorkUsItemController@workusitempage');
        Route::post('update/workusitem', 'WorkUsItemController@update_workusitem');
        Route::post('partner/update', 'PartnerController@update_partner');
        Route::get('/partner', 'PartnerController@partnerpage');
        Route::get('/partnerimage', 'PartnerController@partnerimagepage');
        Route::post('/partner/storeiimage', 'PartnerImageController@storeiimage');
        Route::post('partner/image/remove/{id}', 'PartnerImageController@delete_partnerimage');
        Route::get('/Review', 'ReviewController@Reviewpage');
        Route::post('/review/store', 'ReviewController@store_review');
        Route::post('/review/update/{id}', 'ReviewController@update_review');
        Route::post('review/remove/{id}', 'ReviewController@delete_review');
        Route::post('partner/image/remove/{id}', 'PartnerImageController@delete_partnerimage');
        Route::get('/category', 'CategoryController@categorypage');
        Route::post('category/store', 'CategoryController@store_category');
        Route::post('/category/update/{id}', 'CategoryController@update_category');
        Route::post('category/remove/{id}', 'CategoryController@delete_category');
        Route::get('/order', 'Site\OrderServiceController@orderpage');
        Route::get('/contact', 'Site\ContactController@Contactpage');













});
});
Route::get('/', 'Site\HomeController@index');
Route::post('/order', 'Site\OrderServiceController@create')->name('order');
Route::post('/contact', 'Site\ContactController@create')->name('contact');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');






