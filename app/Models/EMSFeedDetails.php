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
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $name
 * @property string $ems_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property EMS    $ems
 */
class EMSFeedDetails extends Model
{
    protected $table = 'ems_feed_details';
    protected $dateFormat = 'Y-m-d H:i:sO';

    // Because it's a view, this model doesn't have a primary key.
    protected $primaryKey = null;

    /** @var array Because this is a view, it is read only. */
    protected $fillable = [];

    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            return false; // A view cannot be updated.
        });

        static::deleting(function () {
            return false; // A view cannot be deleted.
        });
    }
}
