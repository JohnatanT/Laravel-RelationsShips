<?php

/**
* One To One

*/

Route::get('OneToOne', 'OneToOneController@oneToOne');
Route::get('OneToOneInverse', 'OneToOneController@oneToOneInverse');
Route::get('OneToOneInsert','OneToOneController@oneToOneInsert');

Route::get('OneToMany','OneToManyController@oneToMany');
Route::get('OneToManyTwo','OneToManyController@oneToManyTwo');
Route::get('OneToManyInsert','OneToManyController@oneToManyInsert');

Route::get('ManyToMany','ManyToManyController@manyToMany');
Route::get('ManyToManyInverse','ManyToManyController@manyToManyInverse');
