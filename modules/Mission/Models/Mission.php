<?php

namespace Modules\Mission\Models;

use App\Enums\MissionStatus;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;
use Spatie\Tags\HasTags;

class Mission extends Model
{
    use AutoSearch, AutoSort, AutoFilter;
    use HasTags;

    protected $table = 'missions';

    protected $guarded = [];

    protected $dates = ['due_date', 'completion_date', 'closed_date'];

    protected $with = ['tags', 'owner', 'assignee'];

    protected $searchableColumns = ["status", "title", "description", "level"];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id')->withDefault();
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id')->withDefault();
    }

    public function bidders()
    {
        return $this
            ->belongsToMany(User::class, 'bidding', 'mission_id', 'user_id')
            ->withTimestamps()
            ->withPivot('status');
    }

    public function scopeWhereVisible(Builder $query)
    {
        return $query->whereIn('status', [MissionStatus::PUBLISHED, MissionStatus::ONPROGRESS]);
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->description));
    }

    public function getRewardFormatted()
    {
        return Str::limit($this->description, 80);
    }
}
