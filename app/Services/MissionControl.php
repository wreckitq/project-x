<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\BidStatus;
use App\Enums\MissionStatus;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Modules\Mission\Models\Mission;

class MissionControl
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

        DB::transaction(function () use ($mission, $winner) {
            $mission->assignee()->associate($winner);
            $mission->status = MissionStatus::ONPROGRESS;
            $mission->save();

            $mission->bidders()->updateExistingPivot($winner->getKey(), ['status' => BidStatus::WIN]);
        });
    }

    public function complete(Mission $mission, User $winner)
    {
        if ($mission->status !== MissionStatus::ONPROGRESS) {
            throw new \DomainException('Only mission onprogress can be completed');
        }

        if ($mission->assignee->isNot($winner)) {
            throw new \DomainException('Only assignee can complete the mission');
        }

        DB::transaction(function () use ($mission, $winner) {
            $mission->status = MissionStatus::COMPLETED;
            $mission->completion_date = Carbon::now();
            $mission->save();
        });
    }

    public function close(Mission $mission, User $owner)
    {
        if ($mission->status !== MissionStatus::COMPLETED) {
            throw new \DomainException("Mission {$mission->status} cannot be closed");
        }

        DB::transaction(function () use ($mission) {
            $mission->status = MissionStatus::CLOSED;
            $mission->closed_date = Carbon::now();
            $mission->save();
        });
    }

    public function incomplete(Mission $mission, User $owner)
    {
        //
    }
}
