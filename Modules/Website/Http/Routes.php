<?php

Route::group(['namespace' => 'Legendary\Modules\Website\Http\Controllers'], function () {

    // Website Home Page
    Route::get('/', [ 'as' => 'website.home', 'uses' => 'WebsiteController@index' ]);

});
