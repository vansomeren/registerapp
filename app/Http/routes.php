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

Route::get('/', ['uses' => 'RegisterController@index','as' => 'member.index']);
Route::get('member/create',['uses' => 'RegisterController@create', 'as' => 'member.create']);
Route::post('member/create',['uses'=>'RegisterController@store','as'=>'member.store']);
Route::get('member/{id}',['uses'=>'RegisterController@show','as'=>'member.show']);
Route::get('member/{id}/edit',['uses'=>'RegisterController@edit','as'=>'member.edit']);
Route::post('member/{id}',['uses'=>'RegisterController@update','as'=>'member.updated']);
Route::delete('member/{id}',['uses'=>'RegisterController@destroy','as'=>'member.destroy']);
