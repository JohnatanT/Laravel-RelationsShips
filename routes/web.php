<?php

/**
* One To One

*/

Route::get('OneToOne', 'OneToOneController@oneToOne');
Route::get('OneToOneInverse', 'OneToOneController@oneToOneInverse');
Route::get('OneToOneInsert','OneToOneController@oneToOneInsert');

Route::get('OneToMany','OneToManyController@oneToMany');
