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

use App\Http\Controllers\EMSLogController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* @var Router $router */
$router->group(['middleware' => 'auth:api'], function (Router $router) {
    $router->get('/user', function (Request $request) {
        return $request->user();
    });

    $router->get('/ems/log/{region}', [EMSLogController::class, 'index']);
    $router->get('/ems/log/{region}/{logId}', [EMSLogController::class, 'show']);
    $router->post('/ems/log/{region}', [EMSLogController::class, 'store']);
});
