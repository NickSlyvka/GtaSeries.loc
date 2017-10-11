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

//Роуты сайта

Route::get('/', 'IndexController@index'); //Главная страница
Route::get('signup', 'SignController@signup'); //Регистрация
Route::get('signin', 'SignController@signin'); //Авторизация
Route::get('feedback', 'FeedbackController@feedback'); //Обратная связь
Route::get('about', 'FeedbackController@about'); //Страничка О нас
Route::get('gtav_info', 'GtaVController@gtav_info'); // Информация о жта 5
Route::get('gtav_city', 'GtaVController@gtav_city'); // Город жта 5
Route::get('gtav_sist', 'GtaVController@gtav_sist'); // Системные требования жта 5
Route::get('gta4_info', 'Gta4Controller@gta4_info'); // Информация о жта 4
Route::get('gta4_pers', 'Gta4Controller@gta4_pers'); // Персонажи жта 4
Route::get('gta4_eflc', 'Gta4Controller@gta4_eflc'); // Эпизоды либерти сити
Route::get('gtao_info', 'GtaOController@gtao_info'); // Информация жта онлин
Route::get('gtao_pers', 'GtaOController@gtao_pers'); // Персонажи жта онлин
Route::get('gtao_heist', 'GtaOController@gtao_heist'); // Ограбування жта онлин


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
