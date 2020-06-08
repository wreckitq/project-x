<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Modules\Mission\Models\Mission;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index()
    {
        return view('mission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Mission $mission
     *
     * @return View
     */
    public function show(Mission $mission)
    {
        return view('mission.show', compact('mission'));
    }

    public function bid()
    {
    }

    public function cancelBid()
    {
        //....
    }
}
