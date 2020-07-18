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

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PHPExperts\ConciseUuid\ConciseUuidModel;

/**
 * @property string $id
 * @property string $name
 * @property string $ems_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property EMS    $ems
 */
class EMSFeed extends ConciseUuidModel
{
    protected $dateFormat = 'Y-m-d H:i:sO';

    public function ems(): BelongsTo
    {
        return $this->belongsTo(EMS::class);
    }
}
