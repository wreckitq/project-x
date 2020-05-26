<?php

namespace Modules\Mission\Controllers;

use App\Enums\MissionStatus;
use Illuminate\Routing\Controller;
use Modules\Mission\Requests\Store;
use Modules\Mission\Requests\Update;
use Modules\Mission\Models\Mission;
use Modules\Mission\Tables\IndexTableView;
use Spatie\Tags\Tag;

class MissionController extends Controller
{
    public function index()
    {
        return IndexTableView::make()->view('mission::index');
    }

    public function create()
    {
        $tags = Tag::pluck('name');
        $tags = $tags->combine($tags);
        $selectedTags = [];

        return view('mission::create', compact('tags', 'selectedTags'));
    }

    public function store(Store $request)
    {
        $mission = Mission::create($request->validated() + ['status' => MissionStatus::PUBLISHED, 'owner_id' => auth()->id()]);
        $mission->syncTags($request->tags);

        return redirect()->back()->withSuccess('Mission saved');
    }

    public function show(Mission $mission)
    {
        return view('mission::show', compact('mission'));
    }

    public function edit(Mission $mission)
    {
        $tags = Tag::pluck('name', 'id');
        $tags = $tags->combine($tags)->toArray();
        $selectedTags = $mission->tags->pluck('name');
        $selectedTags = $selectedTags->combine($selectedTags)->toArray();

        return view('mission::edit', compact('mission', 'tags', 'selectedTags'));
    }

    public function update(Update $request, Mission $mission)
    {
        $mission->update($request->validated());
        $mission->syncTags($request->tags);

        return redirect()->back()->withSuccess('Mission saved');
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect()->back()->withSuccess('Mission deleted');
    }
}
