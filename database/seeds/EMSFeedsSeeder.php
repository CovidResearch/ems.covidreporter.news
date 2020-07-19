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

use App\Models\EMSFeed;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EMSFeedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'users';
        // Insert sample testing records
        $feeds = [
            [
                'region_name' => 'Houston, TX',
                'ems_name'    => 'Houston Fire',
                'url'         => 'https://www.broadcastify.com/listen/feed/2841',
            ],
            [
                'region_name' => 'Miami, FL',
                'ems_name'    => 'Miami Fire',
                'url'         => 'https://www.broadcastify.com/listen/feed/30508',
            ],
            [
                'region_name' => 'Los Angeles, CA',
                'ems_name'    => 'Los Angeles City Fire and EMS North',
                'url'         => 'https://www.broadcastify.com/listen/feed/18435',
            ],
            [
                'region_name' => 'Los Angeles, CA',
                'ems_name'    => 'Los Angeles City Fire and EMS South',
                'url'         => 'https://www.broadcastify.com/listen/feed/18556',
            ],
        ];

        foreach ($feeds as $feed) {
            EMSFeed::deepCreate($feed);
        }
    }
}
