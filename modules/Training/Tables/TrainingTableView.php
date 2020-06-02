<?php

namespace Modules\Training\Tables;

use Laravolt\Suitable\Columns\DateTime;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Training\Models\Training;

class TrainingTableView extends TableView
{
    public function source()
    {
        return Training::autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('trainer.name', 'Trainer')->sortable(),
            Text::make('title')->sortable(),
            Text::make('description')->sortable(),
            Text::make('fee')->sortable(),
            Text::make('reward')->sortable(),
            DateTime::make('start_at')->sortable(),
            RestfulButton::make('modules::training'),
        ];
    }
}
