<?php

namespace App\View\Components;

use Modules\Mission\Models\Mission;
use Illuminate\View\Component;

class ProjectDetail extends Component
{
    /**
     * @var Mission
     */
    public $mission;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Mission $mission)
    {
        $this->mission = $mission;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.project-detail');
    }
}
