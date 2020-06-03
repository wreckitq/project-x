<?php

namespace Modules\Reward\Controllers;

use Illuminate\Routing\Controller;
use Modules\Reward\Requests\Store;
use Modules\Reward\Requests\Update;
use Modules\Reward\Models\Reward;
use Modules\Reward\Tables\RewardTableView;

class RewardController extends Controller
{
    public function index()
    {
        return RewardTableView::make()->view('reward::index');
    }

    public function create()
    {
        return view('reward::create');
    }

    public function store(Store $request)
    {
        Reward::create($request->validated());

        return redirect()->back()->withSuccess('Reward saved');
    }

    public function show(Reward $reward)
    {
        return view('reward::show', compact('reward'));
    }

    public function edit(Reward $reward)
    {
        return view('reward::edit', compact('reward'));
    }

    public function update(Update $request, Reward $reward)
    {
        $reward->update($request->validated());

        return redirect()->back()->withSuccess('Reward saved');
    }

    public function destroy(Reward $reward)
    {
        $reward->delete();

        return redirect()->back()->withSuccess('Reward deleted');
    }
}
