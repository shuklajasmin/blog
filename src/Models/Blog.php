<?php

namespace shukaljasmin\blog\Models;

use Illuminate\Database\Eloquent\Model;
use shukaljasmin\blog\Models\Comment;

class Blog extends Model
{
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
