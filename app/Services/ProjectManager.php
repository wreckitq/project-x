<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\BidStatus;
use App\Enums\MissionStatus;
use App\User;
use Illuminate\Support\Facades\DB;
use Modules\Mission\Models\Mission;

class ProjectManager
{
    public function bid(Mission $mission, User $bidder)
    {
        $bidExists = $mission->bidders()->where('id', $bidder->getKey())->exists();

        if ($bidExists) {
            throw new \DomainException('Bid already made');
        }

        $mission->bidders()->attach($bidder, ['status' => BidStatus::WAITING]);
    }

    public function cancelBid(Mission $mission, User $bidder)
    {
        $bidExists = $mission->bidders()->where('id', $bidder->getKey())->exists();

        if (!$bidExists) {
            throw new \DomainException('Bid not yet made. No need to cancel.');
        }

        $mission->bidders()->detach($bidder);
    }

    public function setWinner(Mission $mission, User $winner)
    {
        if ($mission->assignee->exists) {
            throw new \DomainException('Mission already assigned');
        }

        if ($mission->status !== MissionStatus::PUBLISHED) {
            throw new \DomainException('Only PUBLISHED mission can set a winner');
        }

        DB::transaction(function() use ($mission, $winner) {
            $mission->assignee()->associate($winner);
            $mission->status = MissionStatus::ONPROGRESS;
            $mission->save();

            $mission->bidders()->updateExistingPivot($winner->getKey(), ['status' => BidStatus::WIN]);
        });
    }

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
