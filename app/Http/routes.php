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

/**
 * One To One
 */



$this->get('/one-to-one','OneToOneController@OneToOne');
$this->get('/one-to-inverse',['as' => 'inverse', 'uses' => 'OneToOneController@OneToOneInverse']);
$this->get('/one-to-insert', ['as' => 'book_view', 'uses' => 'OneToOneController@OneToOneInsert']);
$this->get('/one-to-many', ['as' => 'many', 'uses' =>  'OneToManyController@oneToMany']);
$this->get('/many-to-inverse', ['as' => 'manyinverse', 'uses' => 'OneToManyController@oneToManyInverse' ]);

$this->get('/terms',['as' => 'terms', 'uses' => 'OneToManyController@terms']);
$this->post('/terms/acept',['as' => 'terms.accept', 'uses' => 'OneToManyController@accept']);

Route::get('/', function () {
    return view('welcome');
});
