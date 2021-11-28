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
Route::get('chi-tiet-QC/{id}',[
    'as'=>'chitietAD',
    'uses'=>'DetailController@getDetailAD'

]);
Route::get('Tim-kiem',[
    'as'=>'Search',
    'uses'=>'SearchController@getSearch'

]);
//user
Route::get('up-bai',[
    'as'=>'trangupbai',
    'uses'=>'UpstoryController@getForm'

]);
Route::get('quan-li-bai-viet',[
    'as'=>'quanli',
    'uses'=>'ManagerUserController@getPage'

]);
Route::get('them-bai-viet',[
    'as'=>'thembaiviet',
    'uses'=>'ManagerUserController@getAddPage'

]);
Route::post('up-bai-viet',[
    'as'=>'upbaiviet',
    'uses'=>'ManagerUserController@postAddStatus'

]);
Route::post('/uploads-ckeditor','ManagerUserController@ckeditor_image');


Route::get('sua-bai-viet/{id}',[
    'as'=>'suabaiviet',
    'uses'=>'ManagerUserController@getEditPage'

]);
Route::post('sua-bai-viet/{id}',[
    'as'=>'editbaiviet',
    'uses'=>'ManagerUserController@postEdit'
]);
Route::get('xoa-bai-viet/{id}',[
    'as'=>'xoabaiviet',
    'uses'=>'ManagerUserController@getDeleteData'

]);

Route::post('comment/{id}',[
    'as'=> 'comment',
    'uses'=>'CommentController@postComment'

]);
Route::get('follow',[
    'as'=> 'follow',
    'uses'=>'FollowController@getFollow'

]);
Route::get('AddFollow/{id}',[
    'as'=> 'addfollow',
    'uses'=>'FollowController@getAddFollow'

]);
Route::get('Delete-Follow/{id}',[
    'as'=> 'deletefollow',
    'uses'=>'FollowController@getDeletefollow'

]);
Route::get('check/{id}',[
    'as'=> 'check',
    'uses'=>'FollowController@getCheck'

]);

// admin
Route::get('admin',[
    'as'=>'admin',
    'uses'=>'AdminController@getAdminPage'

]);