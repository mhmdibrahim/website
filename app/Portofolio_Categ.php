<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio_Categ extends Model
{
    protected $table = 'portofolio_categ';
    public $timestamps = false;

    public function protofolio_projects()
    {
        return $this->hasMany(Portofolio_Project::class,'categ_id');

    }
}
