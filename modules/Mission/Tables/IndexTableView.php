<?php

namespace Modules\Mission\Tables;

use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Mission\Models\Mission;

class IndexTableView extends TableView
{
    public function source()
    {
        return Mission::with(['owner', 'assignee'])->autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('owner.name', 'Owner')->sortable(),
            Text::make('assignee.name', 'Assignee')->sortable(),
            Text::make('status')->sortable(),
            Text::make('title')->sortable(),
            Text::make('excerpt', 'Description')->sortable('description'),
            Text::make('reward')->sortable(),
            Text::make('level')->sortable(),
            Date::make('due_date')->sortable(),
            Date::make('completion_date')->sortable(),
            RestfulButton::make('modules::mission'),
        ];
    }
}
