Route::get('user_course/index','Longtt\Odo\Controllers\User_course\IndexController@index')->name('user_course.index');
    Route::get('user_course/create','Longtt\Odo\Controllers\User_course\CreateController@index')->name('user_course.create');
    Route::get('user_course/edit/{id}','Longtt\Odo\Controllers\User_course\EditController@index')->name('user_course.edit');
    Route::post('user_course/store','Longtt\Odo\Controllers\User_course\StoreController@index');
    Route::get('user_course/search','Longtt\Odo\Controllers\User_course\SearchController@index');
    Route::get('user_course/read','Longtt\Odo\Controllers\User_course\ReadController@index');
    Route::post('user_course/update','Longtt\Odo\Controllers\User_course\UpdateController@index');
    Route::get('user_course/delete/{id}','Longtt\Odo\Controllers\User_course\DeleteController@index');
