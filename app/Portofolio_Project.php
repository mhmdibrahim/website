<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio_Project extends Model
{
    protected $table = 'portofolio_projects';
    public $timestamps = false ;
    public function portfolio_categ()
    {
        return $this->belongsTo(Portofolio_Categ::class,'categ_id');
    }
}
