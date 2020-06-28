<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Services\MissionControl;
use Illuminate\Http\Request;
use Modules\Mission\Models\Mission;

class Close extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Mission $mission)
    {
        try {
            (new MissionControl())->close($mission, auth()->user());
            return redirect()->back()->withSuccess('Mission closed');
        } catch (\DomainException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
