<?php declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use PHPExperts\ConciseUuid\ConciseUuidModel;

/**
 * @property string $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Region extends ConciseUuidModel
{
    protected $dateFormat = 'Y-m-d H:i:sO';
}
