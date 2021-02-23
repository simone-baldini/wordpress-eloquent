<?php
namespace SimoneBaldini\ORM;

class CommentMeta extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function getTable()
    {
        return 'commentmeta';
    }

    public function post()
    {
        return $this->hasOne('\SimoneBaldini\ORM\Comment', 'comment_id');
    }
}
