<?php

namespace App\Policies;

use App\Enums\MissionStatus;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Mission\Models\Mission;

class MissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can bid the mission.
     *
     * @param \App\User $bidder
     * @param \Modules\Mission\Models\Mission $mission
     *
     * @return mixed
     */
    public function bid(User $bidder, Mission $mission)
    {
        $missionIsPublished = $mission->status === MissionStatus::PUBLISHED;
        $userNotYetBid = !$mission->bidders()->where('user_id', $bidder->getKey())->exists();

        return $missionIsPublished && $userNotYetBid;
    }

    /**
     * Determine whether the user allowed to cancel existing bid.
     *
     * @param \App\User $user
     * @param \Modules\Mission\Models\Mission $mission
     *
     * @return mixed
     */
    public function cancelBid(User $bidder, Mission $mission)
    {
        $missionIsPublished = $mission->status === MissionStatus::PUBLISHED;
        $userAlreadyBid = $mission->bidders()->where('user_id', $bidder->getKey())->exists();

        return $missionIsPublished && $userAlreadyBid;
    }

    /**
     * Determine whether the user allowed to cancel existing bid.
     *
     * @param \App\User $user
     * @param \Modules\Mission\Models\Mission $mission
     *
     * @return mixed
     */
    public function setWinner(User $bidder, Mission $mission)
    {
        $missionIsPublished = $mission->status === MissionStatus::PUBLISHED;

        return $missionIsPublished;
    }
}
