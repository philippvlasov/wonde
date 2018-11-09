<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['news_id', 'user_name', 'comment_text'];

    public function news() {
        return $this->belongsTo('App\News');
    }
}
