<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;

/** @var Router $router */
$router->get('/', function () {
    if (Auth::check()) {
        return redirect(RouteServiceProvider::HOME);
    }

    return view('welcome');
});

$router->group(['prefix' => 'auth'], function (Router $router) {
    // Authentication Routes...
    $router->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $router->post('login', 'Auth\LoginController@login');
    $router->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes
    $router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $router->post('register', 'Auth\RegisterController@register');

    // Password reset
    $router->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $router->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});

$router->get('/dashboard', 'DashboardController@view')->name('dashboard');
