<?php

Route::group(['namespace' => 'Haqqman\Modules\Webmaster\Http\Controllers'], function () {

    Route::get('webmaster', [ 'as' => 'webmaster.index', 'uses' => 'WebmasterController@webmaster' ]);
});
