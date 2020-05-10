<?php

namespace Modules\Mission\TableView;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;

class IndexTableView extends TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('owner_id')->sortable(),
            Text::make('assignee_id')->sortable(),
            Text::make('status')->sortable(),
            Text::make('title')->sortable(),
            Text::make('description')->sortable(),
            Text::make('reward')->sortable(),
            Text::make('level')->sortable(),
            Text::make('due_date')->sortable(),
            Text::make('completion_date')->sortable(),
            RestfulButton::make('mission'),
        ];
    }
}
