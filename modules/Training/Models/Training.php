<?php

namespace Modules\Training\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;
use Spatie\Tags\HasTags;
use Spatie\Tags\Tag;

class Training extends Model
{
    use AutoSearch, AutoSort, AutoFilter;
    use HasTags;

    protected $table = 'trainings';

    protected $guarded = [];

    protected $searchableColumns = ["title", "description", "fee", "reward", "trainer.name",];

    protected $dates = ['start_at'];

    protected $with = ['trainer'];

    public static function tagsDropdown() {
        $tags = Tag::pluck('name');

        return $tags->combine($tags);
    }

    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id')->withDefault([
            'name' => 'Belum Tersedia'
        ]);
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->description));
    }

    public function getCoverAttribute()
    {
        return 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTn2GzRo2cX7vnMstXRLSmKq4EoU6reBzy5dU-ptFaVI26U0S3R&usqp=CAU';
    }
}
