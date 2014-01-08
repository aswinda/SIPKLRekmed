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

/* Route::get('/', function()
{
	return View::make('view_mahasiswa');
}); */



Route::get('tambah/{x}/{y}', function($x, $y)
{
	return 'jumlah '.($x+$y);
});

Route::get('volumeBalok/{p}/{l}/{t}', function($p, $l, $t)
{
	return 'Volume Balok  '.($p*$l*$t);
});

Route::get('/','MahasiswaController@viewMahasiswa');