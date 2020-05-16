<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Modules\Mission\Models\Mission;

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
        $query = Mission::query()->whereVisible()->orderBy('due_date')->autoSearch(request('q'));
        if (request('show') === 'my') {
            $query->where('assignee_id', auth()->id());
        }
        $missions = $query->paginate();

        return view('components.project-grid', compact('missions'));
    }
}
