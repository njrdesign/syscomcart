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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('test', 'TestController@index');



#Rotas do TabelaController
Route::resource('tabela','TabelaController');
Route::get('tabela', [
    'as' => 'tabela', 'uses' => 'TabelaController@index'
]);
Route::get('tabela/create', [
    'as' => 'tabela.create', 'uses' => 'TabelaController@create'
]);
Route::get('tabela/edit/{id}', [
    'as' => 'tabela.edit', 'uses' => 'TabelaController@edit'
]);
Route::get('tabela/delete/{id}', [
    'as' => 'tabela.delete', 'uses' => 'TabelaController@destroy'
]);
Route::get('tabela', [
    'as' => 'tabela', 'uses' => 'TabelaController@index'
]);
#FIM Rotas do TabelaController


#Rotas do FinanceiroController
Route::resource('financeiro','FinanceiroController');
Route::get('financeiro', [
    'as' => 'financeiro', 'uses' => 'FinanceiroController@index'
]);
Route::get('financeiro/create', [
    'as' => 'financeiro.create', 'uses' => 'FinanceiroController@create'
]);
Route::get('financeiro/edit/{id}', [
    'as' => 'financeiro.edit', 'uses' => 'FinanceiroController@edit'
]);
Route::get('financeiro/delete/{id}', [
    'as' => 'financeiro.delete', 'uses' => 'FinanceiroController@destroy'
]);

Route::resource('integra','IntegraController');
Route::get('integra', [
    'as' => 'integra', 'uses' => 'IntegraController@index'
]);
Route::get('get-financeiros/{codigoTabela}', 'FinanceiroController@getFinanceiros');
