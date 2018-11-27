<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    /**
     * [categories description]
     * @method categories
     * @return [type]     [description]
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
