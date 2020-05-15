<?php

namespace Modules\Mission\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;

class Mission extends Model
{
    use AutoSearch, AutoSort, AutoFilter;

    protected $table = 'missions';

    protected $guarded = [];

    protected $searchableColumns = ["status", "title", "description", "reward", "level"];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id')->withDefault();
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id')->withDefault();
    }

    public function getExcerptAttribute()
    {
        return Str::limit($this->description);
    }
}
