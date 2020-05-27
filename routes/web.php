<?php

use Illuminate\Support\Facades\Route;

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

/*GET É USADO COMO PADRÃO*/
Route::get('/', 'IndexController@index')->name('index');

Route::get('/shop', 'shopController@shop')->name('shop');
/*.^^^^^^^^^^^^^^^^^ DAR NOME A ROTA */
/*POST É USADO QUANDO TEM INFORMAÇÕES PESSOAIS (EMAIL, SENHAS, ETC...)*/

Route::get('/login', 'LoginController@login')->name('login');
