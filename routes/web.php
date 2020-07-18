<?php declare(strict_types=1);

/**
 * This file is part of ems.covidreporter.news, a Covid Reporter News, LLC, Project.
 *
 * Copyright © 2020 Covid Reporter News, LLC.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/PHPExpertsInc/Skeleton
 *
 * This file is licensed under the MIT License.
 */

use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;

/* @var Router $router */
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
