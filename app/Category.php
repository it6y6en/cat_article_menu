<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    /**
     * [children description]
     * @method children
     * @return [type]   [description]
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
