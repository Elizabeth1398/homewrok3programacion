<?php
  // file: routes.php



Route::resource('/', 'BookController@Index');
Route::resource('author/(:number)', 'AuthorController@show');
Route::resource('editorial/(:number)', 'EditorialController@show');
Route::dispatch();
?>