<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class SitePage extends Model
{
    //

    public function getPublishedAttribute()
    {
        return $this->published_at != null;
    }
}
