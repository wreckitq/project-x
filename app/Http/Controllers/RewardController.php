<?php

namespace App\Http\Controllers;

use Modules\Reward\Models\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::paginate();

        return view('reward.index', compact('rewards'));
    }
}
