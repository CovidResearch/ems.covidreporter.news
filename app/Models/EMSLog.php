<?php declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PHPExperts\ConciseUuid\ConciseUuidModel;

/**
 * @property string $id
 * @property string $region_id
 * @property string $ems_id
 * @property string $event
 * @property Carbon $occurred_at
 * @property string $notes
 * @property Carbon $created_at
 *
 * @property Region $region
 * @property EMS    $ems
 */
class EMSLog extends ConciseUuidModel
{
    protected $dateFormat = 'Y-m-d H:i:sO';

    public function region(): HasOne
    {
        return $this->hasOne(Region::class);
    }

    public function ems(): HasOne
    {
        return $this->hasOne(EMS::class);
    }
}
