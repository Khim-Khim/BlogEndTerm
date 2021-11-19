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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[
    'as'=>'trangchu',
    'uses'=> 'PageController@getIndex'

]);
Route::get('lienhe',[
    'as'=>'lienhe',
    'uses'=> 'ContactControler@getContact'

]);
Route::get('Review-chuyen-di',[
    'as'=>'Reviewchuyendi',
    'uses'=> 'ReviewController@getReview'

]);
Route::get('Tip-di-phuot',[
    'as'=>'Tipdiphuot',
    'uses'=> 'TipController@getTip'

]);
Route::get('Review-am-thuc',[
    'as'=>'foodreview',
    'uses'=> 'FoodController@getFoodPage'

]);
Route::get('Meo-du-lich',[
    'as'=>'tiptravel',
    'uses'=> 'TipTravelController@getTipTravel'

]);
Route::get('Dang-ki',[
    'as'=>'dangki',
    'uses'=> 'signinController@getform'

]);
Route::post('dang-ki',[
    'as'=>'dangkiform',
    'uses'=>'signinController@postSignin'

]);
//route dang nhap
Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'LoginController@getLogin'

]);
Route::post('dang-nhap',[
    'as'=>'dangnhapform',
    'uses'=>'LoginController@postLogin'

]);
Route::get('dang-xuat',[
    'as'=>'dangxuat',
    'uses'=>'LoginController@getLogout'

]);
Route::get('chi-tiet/{id}',[
    'as'=>'chitiet',
    'uses'=>'DetailController@getDetail'

]);

