<?php
namespace SimoneBaldini\ORM;

class PostMeta extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function getTable()
    {
        return 'postmeta';
    }

    public function post()
    {
        return $this->hasOne('\SimoneBaldini\ORM\Post', 'post_id');
    }
}
