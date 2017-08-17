<?php
use Illuminate\Routing\Router;
/*
 * This setting can be controlled from the admin panel.
 * In the interest of keeping this dynamic, don't directly overload it,
 * add a setting to your modules config file.
 * cms.MODULE.config.pxcms-index
 */
$router->get('/', [
    'as' => 'pxcms.pages.home',
    'uses' => config('cms.core.app.pxcms-index', 'PagesController@getHomepage'),
]);

// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => '\Modules\Core\Http\Controllers\Frontend\Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'postlogin', 'uses' => '\Modules\Core\Http\Controllers\Frontend\Auth\LoginController@login']);
Route::post('logout', ['as' => 'postlogout', 'uses' => '\Modules\Core\Http\Controllers\Frontend\Auth\LoginController@logout']);

Route::get('stafflogin', ['as' => 'stafflogin', 'uses' => '\Modules\Core\Http\Controllers\Frontend\StaffAuth\LoginController@showLoginForm']);
Route::post('stafflogin', ['as' => 'poststafflogin', 'uses' => '\Modules\Core\Http\Controllers\Frontend\StaffAuth\LoginController@login']);
Route::post('stafflogout', ['as' => 'poststafflogout', 'uses' => '\Modules\Core\Http\Controllers\Frontend\StaffAuth\LoginController@logout']);



// Registration Routes...
/*Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
/*Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/



/*Route::get('login', ['as' => 'pxcms.user.login', 'uses' => '\Modules\Core\Http\Controllers\Frontend\Auth\AuthController@webLogin']);
Route::post('login', ['as' => 'web-login', 'uses' => '\Modules\Core\Http\Controllers\Frontend\Auth\AuthController@postLogin']);
Route::get('staff-login', '\Modules\Core\Http\Controllers\Frontend\AdminAuth\StaffController@staffLogin');* /
Route::get('staff-login', ['as' => 'get-staff-login', 'uses' => '\Modules\Core\Http\Controllers\Frontend\StaffAuth\AuthController@staffLoginGet']);
Route::post('staff-login', ['as' => 'post-staff-login', 'uses' => '\Modules\Core\Http\Controllers\Frontend\StaffAuth\AuthController@staffLoginPost']);
Route::group(['prefix' => 'login'], function (Router $router) {*/
