<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'user_id', 'article_id', 'parent_id', 'content', 'name', 'email', 'website', 'avatar', 'ip', 'city'
    ];

    /**
     * 获得此评论所属文章
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article() {
        return $this -> belongsTo('App\Article');
    }

    public function replys() {
        return $this-> hasMany('App\Comment', 'parent_id');
    }
}
