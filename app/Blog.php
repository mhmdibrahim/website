<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    public $timestamps = false;


    public function team(){
        return $this->belongsTo(Team::class,'team_id');
    }
}
