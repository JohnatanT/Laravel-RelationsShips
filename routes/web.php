<?php

/**
* One To One

*/

Route::get('/', 'OneToOneController@oneToOne');
Route::get('inverse', 'OneToOneController@oneToOneInverse');
