<?php
namespace SimoneBaldini\ORM;

class User extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'ID';
    public $timestamp = false;

    public function meta()
    {
        return $this->hasMany('SimoneBaldini\ORM\UserMeta', 'user_id');
    }
}
