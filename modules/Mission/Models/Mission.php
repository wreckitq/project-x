<?php

namespace Modules\Mission\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;

class Mission extends Model
{
    use AutoSearch, AutoSort, AutoFilter;

    protected $table = 'missions';

    protected $guarded = [];

    protected $searchableColumns = ["status", "title", "description", "reward", "level", "due_date", "completion_date",];
}
