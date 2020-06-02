<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Training\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::paginate();

        return view('training.index', compact('trainings'));
    }

    public function show(Training $training)
    {
        return view('training.show', compact('training'));
    }
}
