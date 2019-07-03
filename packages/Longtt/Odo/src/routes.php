<?php
Route::group(['middleware' => ['web', 'checkPermission']], function () {
    Route::get('testabc', function () {
        echo "123";
        exit;
    });
//đặt phòng
    Route::get('booking_calendar/index', 'Longtt\Odo\Controllers\Booking_calendar\IndexController@index')->name('booking_calendar.index');
    Route::get('booking_calendar/create', 'Longtt\Odo\Controllers\Booking_calendar\CreateController@index')->name('booking_calendar.create');
    Route::get('booking_calendar/edit/{id}', 'Longtt\Odo\Controllers\Booking_calendar\EditController@index')->name('booking_calendar.edit');
    Route::post('booking_calendar/store', 'Longtt\Odo\Controllers\Booking_calendar\StoreController@index');
    Route::get('booking_calendar/search', 'Longtt\Odo\Controllers\Booking_calendar\SearchController@index');
    Route::get('booking_calendar/read', 'Longtt\Odo\Controllers\Booking_calendar\ReadController@index');
    Route::post('booking_calendar/update', 'Longtt\Odo\Controllers\Booking_calendar\UpdateController@index');
    Route::get('booking_calendar/delete/{id}', 'Longtt\Odo\Controllers\Booking_calendar\DeleteController@index');
//user
    Route::get('user/index','Longtt\Odo\Controllers\User\IndexController@index')->name('user.index');
    Route::get('user/create','Longtt\Odo\Controllers\User\CreateController@index')->name('user.create');
    Route::get('user/edit/{id}','Longtt\Odo\Controllers\User\EditController@index')->name('user.edit');
    Route::post('user/store','Longtt\Odo\Controllers\User\StoreController@index');
    Route::get('user/search','Longtt\Odo\Controllers\User\SearchController@index');
    Route::get('user/read','Longtt\Odo\Controllers\User\ReadController@index');
    Route::post('user/update','Longtt\Odo\Controllers\User\UpdateController@index');
    Route::get('user/delete/{id}','Longtt\Odo\Controllers\User\DeleteController@index');

});
Route::post('time-ajax', 'Longtt\Odo\Controllers\Ajax\Booking_calenderController@timeAjax');
Route::post('course-ajax', 'Longtt\Odo\Controllers\Ajax\Booking_calenderController@courseAjax');
