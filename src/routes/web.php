<?php
Route::group(['namespace' => 'shukaljasmin\blog\Http\Controllers'],function(){
    Route::get('blog', 'BlogController@index');
    Route::get('blog/detail/{slg}', 'BlogController@getDetail');
});