<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Tags\HasTags;

class Mission extends Model
{
    use HasTags;

    protected $dates = ['due_date', 'completion_date'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id')->withDefault();
    }

    public function getExcerptAttribute()
    {
        return Str::limit($this->description, 80);
    }

    public function getRewardFormatted()
    {
        return Str::limit($this->description, 80);
    }
}
