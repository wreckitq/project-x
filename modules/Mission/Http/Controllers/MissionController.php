<?php

namespace Modules\Mission\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Mission\Http\Requests\Store;
use Modules\Mission\Http\Requests\Update;
use Modules\Mission\Models\Mission;
use Modules\Mission\TableView\IndexTableView;

class MissionController extends Controller
{
    public function index()
    {
        $items = Mission::autoSort()->latest()->autoSearch(request('search'))->paginate();

        return (IndexTableView::make($items))->view('mission::index');
    }

    public function create()
    {
        return view('mission::create');
    }

    public function store(Store $request)
    {
        Mission::create($request->validated());

        return redirect()->route('mission.index')->withSuccess('Mission saved');
    }

    public function show(Mission $mission)
    {
        return view('mission::show', compact('mission'));
    }

    public function edit(Mission $mission)
    {
        return view('mission::edit', compact('mission'));
    }

    public function update(Update $request, Mission $mission)
    {
        $mission->update($request->validated());

        return redirect()->back()->withSuccess('Mission saved');
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect()->route('mission.index')->withSuccess('Mission deleted');
    }
}
