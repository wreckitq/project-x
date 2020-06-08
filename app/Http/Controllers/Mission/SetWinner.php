<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Services\MissionControl;
use App\User;
use Illuminate\Http\Request;
use Modules\Mission\Models\Mission;

class SetWinner extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Mission $mission, User $user)
    {
        try {
            (new MissionControl())->setWinner($mission, $user);
            return redirect()->back()->withSuccess('Winner set');
        } catch (\DomainException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
