<?php

Route::get('/', ['as' => 'create', 'uses' => 'PasteController@index']);

Route::post('/', ['as' => 'store', 'uses' => 'PasteController@store']);

Route::get('{paste}', ['as' => 'show', 'uses' => 'PasteController@show']);

Route::get('{paste}/fork', ['as' => 'fork', 'uses' => 'PasteController@fork']);

Route::get('{paste}/raw', ['as' => 'raw', 'uses' => 'PasteController@raw']);

Route::bind('paste', function($value)
{
  return Paste::find(Math::to_base_10($value));
});