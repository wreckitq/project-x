<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Services\ProjectManager;
use Illuminate\Http\Request;
use Modules\Mission\Models\Mission;

class Bid extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Mission $mission)
    {
        try {
            (new ProjectManager())->bid($mission, auth()->user());
            return redirect()->back()->withSuccess('Bid successfully made 👌🏼');
        } catch (\DomainException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
