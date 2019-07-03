<?php
Route::group(['middleware' => ['web','checkPermission']], function () {
    //Route::get('/home','Longtt\User\Controllers\User\IndexController@index')->name('user.index');
    //Route::get('/profile','Longtt\User\Controllers\Auth\ProfileController@index');
    //Route::get('/home','Longtt\User\Controllers\Auth\ProfileController@index');
    Route::get('/config/user/index','Longtt\User\Controllers\User\IndexController@index')->name('user.index');
    Route::get('/config/user/create','Longtt\User\Controllers\User\CreateController@index')->name('user.create');
    Route::get('/config/user/edit/{id}','Longtt\User\Controllers\User\EditController@index')->name('user.edit');
    Route::post('/config/user/store','Longtt\User\Controllers\User\StoreController@index');
    Route::get('/config/user/read','Longtt\User\Controllers\User\ReadController@index');
    Route::post('/config/user/update','Longtt\User\Controllers\User\UpdateController@index');
    //Route::get('/config/user/delete/{id}','Longtt\User\Controllers\User\DeleteController@index');
    Route::get('/config/user/search','Longtt\User\Controllers\User\SearchController@index');
    Route::get('/config/user/edit-user-role/{id}','Longtt\User\Controllers\User\UserEditRoleController@index');
    Route::post('/config/user/update-edit-user-role','Longtt\User\Controllers\User\UpdateUserEditRoleController@index');

    Route::get('/config/role/index','Longtt\User\Controllers\Role\IndexController@index')->name('role.index');
    Route::get('/config/role/search','Longtt\User\Controllers\Role\SearchController@index')->name('role.search');
    Route::get('/config/role/create','Longtt\User\Controllers\Role\CreateController@index')->name('role.create');
    Route::get('/config/role/edit/{id}','Longtt\User\Controllers\Role\EditController@index')->name('role.edit');
    Route::post('/config/role/store','Longtt\User\Controllers\Role\StoreController@index');
    Route::get('/config/role/read','Longtt\User\Controllers\Role\ReadController@index');
    Route::post('/config/role/update','Longtt\User\Controllers\Role\UpdateController@index');
    //Route::get('/config/role/delete/{id}','Longtt\User\Controllers\Role\DeleteController@index');

//    Route::get('/config/menu/index','Longtt\User\Controllers\Menu\IndexController@index')->name('menu.index');
//    Route::get('/config/menu/create','Longtt\User\Controllers\Menu\CreateController@index')->name('menu.create');
//    Route::get('/config/menu/edit/{id}','Longtt\User\Controllers\Menu\EditController@index')->name('menu.edit');
//    Route::post('/config/menu/store','Longtt\User\Controllers\Menu\StoreController@index');
//    Route::get('/config/menu/read','Longtt\User\Controllers\Menu\ReadController@index');
//    Route::post('/config/menu/update','Longtt\User\Controllers\Menu\UpdateController@index');
//    Route::get('/config/menu/delete/{id}','Longtt\User\Controllers\Menu\DeleteController@index');

    Route::get('/config/role/permission','Longtt\User\Controllers\Permission\IndexController@index')->name('permission.index');
    Route::post('/config/permission/store','Longtt\User\Controllers\Permission\StoreController@index')->name('permission.store');

    Route::get('test/index','Longtt\User\Controllers\Test\IndexController@index')->name('test.index');
    Route::get('test/create','Longtt\User\Controllers\Test\CreateController@index')->name('test.create');
    Route::get('test/edit/{id}','Longtt\User\Controllers\Test\EditController@index')->name('test.edit');
    Route::post('test/store','Longtt\User\Controllers\Test\StoreController@index');
    Route::get('test/search','Longtt\User\Controllers\Test\SearchController@index');
    Route::get('test/read','Longtt\User\Controllers\Test\ReadController@index');
    Route::post('test/update','Longtt\User\Controllers\Test\UpdateController@index');
    Route::get('test/delete/{id}','Longtt\User\Controllers\Test\DeleteController@index');


});

Route::group(['middleware' => ['web']], function () {
    Route::get('','Longtt\User\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::get('login','Longtt\User\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login','Longtt\User\Controllers\Auth\LoginController@login');
    Route::get('logout','Longtt\User\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('register','Longtt\User\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register','Longtt\User\Controllers\Auth\RegisterController@register');
    Route::get('password/reset','Longtt\User\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email','Longtt\User\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}','Longtt\User\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset','Longtt\User\Controllers\Auth\ResetPasswordController@reset');

//sociallogin
    Route::post('login','Longtt\User\Controllers\Auth\LoginController@login');
    Route::get('login/facebook', 'Longtt\User\Controllers\Auth\LoginController@redirectToProvider');
    Route::get('login/facebook/callback', 'Longtt\User\Controllers\Auth\LoginController@handleProviderCallback');

    Route::get('/home','Longtt\User\Controllers\Auth\ProfileController@index')->name('user.home');

});

Route::get('view_log_api','Longtt\User\Controllers\Log\LogAPIController@index');
Route::get('clear_log_api','Longtt\User\Controllers\Log\LogAPIController@clear');

Route::get('view_log_framework','Longtt\User\Controllers\Log\LogFrameWorkController@index');
Route::get('clear_log_framework','Longtt\User\Controllers\Log\LogFrameWorkController@clear');

Route::get('view_log_debug','Longtt\User\Controllers\Log\LogDebugController@index');
Route::get('clear_log_debug','Longtt\User\Controllers\Log\LogDebugController@clear');

//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
//Route::post('/user/register','Longtt\User\Controllers\RegisterController@index');
//Route::post('/user/login','Longtt\User\Controllers\LoginController@index');
//Route::post('/user/verify-phone','Longtt\User\Controllers\VerifyPhoneController@index');
//Route::post('/user/update-facebook-token','Longtt\User\Controllers\UpdateFacebookTokenController@index');
//Route::post('/user/profile/get-system-profile','Longtt\User\Controllers\GetSystemProfileController@index');
//Route::post('/user/profile/update-system-profile','Longtt\User\Controllers\UpdateSystemProfileController@index');
//Route::post('/user/get-list-profile','Longtt\User\Controllers\GetListProfileController@index');
//
//Route::get('/user/file-upload','Longtt\User\Controllers\FileUploadController@index');
//Route::post('/user/file-upload','Longtt\User\Controllers\FileUploadController@save');
//Route::get('/user/read-image/{image_name}','Longtt\User\Controllers\FileUploadController@readImage');
//Route::post('/otp/get-new','Longtt\User\Controllers\OtpController@index');
//Route::post('/update-location','Longtt\User\Controllers\UpdateLocationController@index');
//Route::post('/upload-call-log','Longtt\User\Controllers\UploadCallLogController@index');
//Route::post('/upload-phone-book','Longtt\User\Controllers\UploadPhoneBookController@index');
