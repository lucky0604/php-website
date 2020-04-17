<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name', 'article_num', 'search_num'
    ];

    /**
     * 获得此标签下文章
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles() {
        return $this -> belongsToMany('App\Article');
    }
}
