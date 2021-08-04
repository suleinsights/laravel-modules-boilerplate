<?php

Route::group(['namespace' => 'Legendary\Modules\Customer\Http\Controllers'], function () {

    // Haqqman home page
    Route::get('/', [ 'as' => 'customer.home', 'uses' => 'HomeController@index' ]);

});
