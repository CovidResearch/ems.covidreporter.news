<?php

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

/** @var Router $router */
$router->group(['middleware' => 'auth:api'], function (Router $router) {
    $router->get('/user', function (Request $request) {
        return $request->user();
    });

    $router->get('/ems/log/{region}', [EMSLogController::class, 'index']);
    $router->get('/ems/log/{region}/{logId}', [EMSLogController::class, 'show']);
    $router->post('/ems/log/{region}', [EMSLogController::class, 'store']);
});
