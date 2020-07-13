<?php declare(strict_types=1);

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
 *
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
