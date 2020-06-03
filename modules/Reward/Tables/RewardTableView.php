<?php

namespace Modules\Reward\Tables;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Reward\Models\Reward;

class RewardTableView extends TableView
{
    public function source()
    {
        return Reward::autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('title')->sortable(),
            Text::make('excerpt')->sortable('description'),
            Text::make('stock')->sortable(),
            Text::make('price')->sortable(),
            RestfulButton::make('modules::reward'),
        ];
    }
}
