<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Tags\HasTags;

class Mission extends Model
{
    use HasTags;

    protected $dates = ['due_date', 'completion_date'];

    public function getExcerptAttribute()
    {
        return Str::limit($this->description, 80);
    }

    public function getRewardFormatted()
    {
        return Str::limit($this->description, 80);
    }
}
