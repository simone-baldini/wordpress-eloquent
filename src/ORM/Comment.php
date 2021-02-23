<?php
namespace SimoneBaldini\ORM;

class Comment extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'comment_ID';
    public $timestamp = false;

    public function post()
    {
        return $this->hasOne('SimoneBaldini\ORM\Post');
    }
}
