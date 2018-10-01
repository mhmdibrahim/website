<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    public $timestamps = false;

    public function social_medias()
    {
        return $this->belongsToMany(Social_Media::class, 'team_social', 'social_id', 'team_id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'team_id');
    }

}
