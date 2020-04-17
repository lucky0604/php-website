<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'cover', 'content_raw', 'content_html', 'is_top', 'is_hidden', 'view', 'comment'
    ];

    /**
     * 获得此博客文章评论
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
        return $this -> hasMany('App\Comment');
    }

    /**
     * 获得此博客文章标签
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {
        return $this -> belongsToMany('App\Tag');
    }

    static public function update_comments($id) {
        $article = Article::findOrFail($id);
        $article -> comment = $article -> comment + 1;
        $article -> update([
            'comment' => $article -> comment
        ]);
    }
}
