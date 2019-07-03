<?php
Route::group(['middleware' => ['web','checkPermission']], function () {
    Route::get('testabc',function(){
        echo "123";exit;
    });

});

