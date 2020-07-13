<?php declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PHPExperts\ConciseUuid\ConciseUuidModel;

/**
 * @property string    $id
 * @property string    $name
 * @property Carbon    $created_at
 * @property Carbon    $updated_at
 *
 * @property Region    $region
 * @property EMSFeed[] $ems_feeds
 */
class EMS extends ConciseUuidModel
{
    protected $dateFormat = 'Y-m-d H:i:sO';

    public function region(): HasOne
    {
        return $this->hasOne(Region::class);
    }

    public function ems_feeds(): HasMany
    {
        return $this->hasMany(EMSFeed::class);
    }
}
