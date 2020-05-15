<?php

namespace Modules\Mission\Controllers;

use App\Enums\MissionStatus;
use Illuminate\Routing\Controller;
use Modules\Mission\Requests\Store;
use Modules\Mission\Requests\Update;
use Modules\Mission\Models\Mission;
use Modules\Mission\Tables\IndexTableView;

class MissionController extends Controller
{
    public function index()
    {
        return IndexTableView::make()->view('mission::index');
    }

    public function create()
    {
        return view('mission::create');
    }

    public function store(Store $request)
    {
        Mission::create($request->validated() + ['status' => MissionStatus::PUBLISHED, 'owner_id' => auth()->id()]);

        return redirect()->back()->withSuccess('Mission saved');
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

        return redirect()->back()->withSuccess('Mission deleted');
    }
}
