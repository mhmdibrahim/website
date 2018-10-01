<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_Media extends Model
{
    protected $table ='social_media';
    public $timestamps = false;

    public function teams(){
        return $this->belongsToMany(Team::class,'team_social','team_id','social_id');
    }
}
