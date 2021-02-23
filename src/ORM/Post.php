<?php
namespace SimoneBaldini\ORM;

class Post extends \Illuminate\Database\Eloquent\Model
{
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    protected $primaryKey = 'ID';

    public function meta()
    {
        return $this->hasMany('SimoneBaldini\ORM\PostMeta', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('SimoneBaldini\ORM\Comment', 'comment_post_ID');
    }
}
