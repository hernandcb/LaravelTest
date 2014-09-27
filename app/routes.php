<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@test'] );

// candidates/{slug}/{id}
Route::get('candidates/{slug}/{id}', ['as' => 'category', 'uses' => 'CandidatesController@category'] );

// hernan-carvajal/1
Route::get('{slug}/{id}', ['as' => 'candidate', 'uses' => 'CandidatesController@show'] );

Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UsersController@signUp']);

Route::post('sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);