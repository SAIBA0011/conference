<?php

Route::get('/', ['as' => 'homepage', 'uses' => 'PagesController@home']);
Route::post('/store_details', ['as' => 'store_details', 'uses' => 'SubscriberController@store']);
Route::get('/subscribers/all/view', ['as' => 'view_subscribers', 'uses' => 'SubscriberController@getSubscribers']);