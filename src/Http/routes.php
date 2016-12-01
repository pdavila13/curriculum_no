<?php

Route::group(['middleware' => 'auth'], function() {
    Route::resource('studies', 'StudiesController');
});