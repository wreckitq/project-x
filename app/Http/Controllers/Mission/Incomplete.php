<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Services\ProjectManager;
use App\User;
use Illuminate\Http\Request;
use Modules\Mission\Models\Mission;

class Incomplete extends Controller
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
            (new ProjectManager())->incomplete($mission, auth()->user());
            return redirect()->back()->withWarning('Completion claim rejected');
        } catch (\DomainException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
