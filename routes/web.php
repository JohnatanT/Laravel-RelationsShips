<?php

/**
* One To One

*/

//One To One
Route::get('OneToOne', 'OneToOneController@oneToOne');
Route::get('OneToOneInverse', 'OneToOneController@oneToOneInverse');
Route::get('OneToOneInsert','OneToOneController@oneToOneInsert');
//One To Many
Route::get('OneToMany','OneToManyController@oneToMany');
Route::get('OneToManyTwo','OneToManyController@oneToManyTwo');
Route::get('OneToManyInsert','OneToManyController@oneToManyInsert');
//Many To Many
Route::get('ManyToMany','ManyToManyController@manyToMany');
Route::get('ManyToManyInverse','ManyToManyController@manyToManyInverse');
Route::get('ManyToManyInsert','ManyToManyController@manyToManyInsert');
//Relation Polymorphic
Route::get('polymorphic','PolymorphicController@polymorphic');
