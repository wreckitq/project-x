<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class MissionStatus extends Enum
{
    const DRAFT = 'DRAFT';

    const PUBLISHED = 'PUBLISHED';

    const ONPROGRESS = 'ONPROGRESS';

    const COMPLETED = 'COMPLETED';
}
