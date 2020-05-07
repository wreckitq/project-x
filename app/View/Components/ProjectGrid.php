<?php

namespace App\View\Components;

use App\Models\Mission;
use Illuminate\View\Component;

class ProjectGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $missions = Mission::query()->orderBy('due_date')->paginate();

        return view('components.project-grid', compact('missions'));
    }
}
