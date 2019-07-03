<?php
Route::group(['middleware' => ['web','checkPermission']], function () {
    Route::get('testabc',function(){
        echo "123";exit;
    });

    Route::get('zone/index','Longtt\B2s\Controllers\Zone\IndexController@index')->name('zone.index');
    Route::get('zone/create','Longtt\B2s\Controllers\Zone\CreateController@index')->name('zone.create');
    Route::get('zone/edit/{id}','Longtt\B2s\Controllers\Zone\EditController@index')->name('zone.edit');
    Route::post('zone/store','Longtt\B2s\Controllers\Zone\StoreController@index');
    Route::get('zone/search','Longtt\B2s\Controllers\Zone\SearchController@index');
    Route::get('zone/read','Longtt\B2s\Controllers\Zone\ReadController@index');
    Route::post('zone/update','Longtt\B2s\Controllers\Zone\UpdateController@index');
    Route::get('zone/delete/{id}','Longtt\B2s\Controllers\Zone\DeleteController@index');


    Route::get('user/index','Longtt\B2s\Controllers\User\IndexController@index')->name('user.index');
    Route::get('user/create','Longtt\B2s\Controllers\User\CreateController@index')->name('user.create');
    Route::get('user/edit/{id}','Longtt\B2s\Controllers\User\EditController@index')->name('user.edit');
    Route::post('user/store','Longtt\B2s\Controllers\User\StoreController@index');
    Route::get('user/search','Longtt\B2s\Controllers\User\SearchController@index');
    Route::get('user/read','Longtt\B2s\Controllers\User\ReadController@index');
    Route::post('user/update','Longtt\B2s\Controllers\User\UpdateController@index');
    Route::get('user/delete/{id}','Longtt\B2s\Controllers\User\DeleteController@index');

    Route::get('user/index_npp','Longtt\B2s\Controllers\User\IndexNppController@index')->name('user.index');
    Route::get('user/create_npp','Longtt\B2s\Controllers\User\CreateNppController@index')->name('user.create');
    Route::post('user/store_npp','Longtt\B2s\Controllers\User\StoreNppController@index');


    Route::get('category/index','Longtt\B2s\Controllers\Category\IndexController@index')->name('category.index');
    Route::get('category/create','Longtt\B2s\Controllers\Category\CreateController@index')->name('category.create');
    Route::get('category/edit/{id}','Longtt\B2s\Controllers\Category\EditController@index')->name('category.edit');
    Route::post('category/store','Longtt\B2s\Controllers\Category\StoreController@index');
    Route::get('category/search','Longtt\B2s\Controllers\Category\SearchController@index');
    Route::get('category/read','Longtt\B2s\Controllers\Category\ReadController@index');
    Route::post('category/update','Longtt\B2s\Controllers\Category\UpdateController@index');
    Route::get('category/delete/{id}','Longtt\B2s\Controllers\Category\DeleteController@index');

});

