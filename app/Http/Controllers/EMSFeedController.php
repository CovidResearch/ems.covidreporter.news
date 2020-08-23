<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\EMS;
use App\Models\EMSFeed;
use App\Models\EMSFeedDetails;
use App\Models\EMSLog;
use App\Models\Region;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EMSFeedController extends Controller
{
    public function index()
    {
        return new JsonResponse(
            EMSFeedDetails::query()->paginate(10),
        );
    }

    public function show(string $id)
    {
        return new JsonResponse(
            EMSFeed::query()->where([
                'id' => $id,
            ])->get()
        );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'region_name' => 'required',
            'ems_name'    => 'required',
            'url'         => 'required',
        ]);

        $emsFeed = EMSFeed::deepCreate($request->all());

        return new JsonResponse($emsFeed);
    }
}
