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

namespace App\Http\Controllers;

use App\Models\EMS;
use App\Models\EMSLog;
use App\Models\Region;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EMSLogController extends Controller
{
    public function index(string $regionId)
    {
        return new JsonResponse(
            EMSLog::query()->where([
                'region_id' => $regionId,
            ])->get()
        );
    }

    public function show(string $id)
    {
        return new JsonResponse(
            EMSLog::query()->where([
                'id' => $id,
            ])->get()
        );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'region_id'   => 'required|in:' . Region::class,
            'ems_id'      => 'required|in:' . EMS::class,
            'event'       => 'required',
            'occurred_at' => 'required|date_format:Y-m-d H:i:sO',
        ]);

        $log = EMSLog::query()->create($request->all());

        return new JsonResponse($log);
    }
}
