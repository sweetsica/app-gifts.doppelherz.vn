<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DirectController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('customer.index');
});

//Bắt đầu: Check qua quẹt trực tiếp
Route::get('/vip/{token}/{code}',function ($token,$code){
    if ($token == '2023') {
        Session::put('code',$code);
//        return Redirect::action('App\Http\Controllers\DirectController@index', ['code' => $code]);
        return Redirect::action('App\Http\Controllers\DirectController@index');
    }
    return view('customer.index');
});
//Kết thúc: Check qua quẹt trực tiếp
//Bắt đầu: Check qua quẹt trực tiếp
Route::post('/vip',function (Request $request){
//    dd($request);
    if($request->token = '2023'){
        Session::put('code',$request->code);
        return Redirect::action('App\Http\Controllers\DirectController@index',);
    }
    return view('customer.index');
})->name('check.code');
//Kết thúc: Check qua quẹt trực tiếp

//Bắt đầu: Quét mã -> chuyển thẳng
//Route::get('/s-vip/{token}/{code}',function ($token,$code){
//    if ($token == '2023') {
//        Session::put('code',$code);
//        return Redirect::to('https://doppelherz.vn/cart/?wt_coupon='.$code);
//    }
//    return view('welcome');
//});
//Kết thúc: Quét mã -> chuyển thẳng

Route::get('/welcome',[DirectController::class, 'index']);
Route::get('logout',function (){
    Session::flush();
    return view('customer.index');
})->name('logout');
