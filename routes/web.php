<?php

Route::get('/', 'HomeController@index');

Route::get('/customer/register', 'CustomerController@register');

Route::get('/local', 'ReceptionLocalController@read');

Route::get('/local/new', 'ReceptionLocalController@new');

Route::post('/local/create', 'ReceptionLocalController@create');

?>