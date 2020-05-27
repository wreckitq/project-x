<?php

namespace Modules\Mission\Tables;

use App\Enums\Level;
use App\Enums\MissionStatus;
use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\Label;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Mission\Models\Mission;

class IndexTableView extends TableView
{
    public function source()
    {
        return Mission::autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('owner.name', 'Owner')->sortable(),
            Text::make('title')->sortable(),
            Text::make('reward')->sortable(),
            Label::make('level')->sortable()
                ->addClass('small')
                ->addClassIf(Level::HARD, 'black solid')
                ->addClassIf(Level::MEDIUM, 'black')
                ->addClassIf(Level::EASY, 'basic'),
            Label::make('status')->sortable()
                ->addClass('small')
                ->addClassIf(MissionStatus::PUBLISHED, 'teal')
                ->addClassIf(MissionStatus::ONPROGRESS, 'orange')
                ->addClassIf(MissionStatus::COMPLETED, 'black'),
            Date::make('due_date')->sortable(),
            RestfulButton::make('modules::mission'),
        ];
    }
}
