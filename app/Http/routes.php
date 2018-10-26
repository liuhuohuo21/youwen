<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	session(['admin'=>false]);
	dump(session('admin'));
	echo 'aaaa';
    return view('welcome');
});
// Route::post('/admin/user/edit/{id}/{name}',function($id,$name){
// 	echo '修改';
	//  route('aue',['id'=>'10']);
	// //url('/admin/user/',['id'=>10]);
	// return redirect();
// });
// ->where('id','')->where('name','');

Route::get('/red',function(){
	$url = route('aud');
	// $url = url('admin/user/delete',['id'=>'100']);
	return redirect($url);
});
Route::get('/admin/user/delete',['as'=>'aud','uses'=>function(){
	echo '删除后台用户';
}]);
