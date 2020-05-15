<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Mission;

class ProjectManager
{
    public function completeMission(Mission $mission, User $assignee)
    {
    }

    public function closeMission(Mission $mission, User $owner)
    {
    }

    public function reopenMission(Mission $mission, User $owner)
    {
    }

    public function cancelMission(Mission $mission, User $assignee)
    {
    }
}
