<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class SiteMap extends Model
{

    protected $fillable = [
        "link", "template"
    ];
    public function Map()
    {
        return $this->hasOne(SitePage::class);
    }

    public function Pages()
    {
        return $this->hasMany(SitePage::class);
    }

    public function Page()
    {
        return $this->Pages()->where('published_at', '!=', null);
    }
}
