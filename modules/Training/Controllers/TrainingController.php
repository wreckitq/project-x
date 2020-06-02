<?php

namespace Modules\Training\Controllers;

use App\User;
use Illuminate\Routing\Controller;
use Modules\Training\Requests\Store;
use Modules\Training\Requests\Update;
use Modules\Training\Models\Training;
use Modules\Training\Tables\TrainingTableView;

class TrainingController extends Controller
{
    public function index()
    {
        return TrainingTableView::make()->view('training::index');
    }

    public function create()
    {
        $tags = Training::tagsDropdown();
        $selectedTags = [];
        $trainers = User::pluck('name', 'id');

        return view('training::create', compact('tags', 'selectedTags', 'trainers'));
    }

    public function store(Store $request)
    {
        $training = Training::create($request->validated());
        $training->syncTags($request->tags);

        return redirect()->back()->withSuccess('Training saved');
    }

    public function show(Training $training)
    {
        return view('training::show', compact('training'));
    }

    public function edit(Training $training)
    {
        $tags = Training::tagsDropdown();
        $selectedTags = $training->tags->pluck('name');
        $selectedTags = $selectedTags->combine($selectedTags)->toArray();
        $trainers = User::pluck('name', 'id');

        return view('training::edit', compact('training', 'tags', 'selectedTags', 'trainers'));
    }

    public function update(Update $request, Training $training)
    {
        $training->update($request->validated());

        return redirect()->back()->withSuccess('Training saved');
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->back()->withSuccess('Training deleted');
    }
}
