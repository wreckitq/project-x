<?php

namespace Modules\Reward\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;

class Reward extends Model
{
    use AutoSearch, AutoSort, AutoFilter;

    protected $table = 'rewards';

    protected $guarded = [];

    protected $searchableColumns = ["title", "description", "stock", "price"];

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->description));
    }

}
