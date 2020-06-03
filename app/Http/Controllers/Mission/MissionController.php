<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use Modules\Mission\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mission.index');
    }

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        return view('mission.show', compact('mission'));
    }

    public function bid()
    {
        //
    }

    public function cancelBid()
    {
        //
    }
}
