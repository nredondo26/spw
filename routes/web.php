<?php

/*Rutas Api aplicacion*/
Route::post('register_dispositives','ApiController@registra_dispositivo');
Route::post('register_message_text','ApiController@registra_message_text');
Route::post('register_contact','ApiController@register_contact');
/*Fin Rutas Api aplicacion*/

Route::get('/', function () {return view('index'); })->middleware('loging');

Route::get('welcome','AdminController@index');

/*Rutas del Login*/
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout/', 'LoginController@logout')->name('logout');
/*Fin Rutas del Login*/

//Rutas de Acciones
Route::get('llamadas/{id}','AdminController@llamadas')->name('llamadas');
Route::get('contactos/{id}','AdminController@contactos')->name('contactos');
Route::get('mensajes/{id}','AdminController@mensajes')->name('mensajes');
Route::get('ubicacion/{id}','AdminController@ubicacion')->name('ubicacion');
Route::get('whatsapp/{id}','AdminController@whatsapp')->name('whatsapp');
//Fin rutas de Acciones

Route::get('whatsappchat/{id}','AdminController@whatsappchat')->name('chat whatsapp');