<?php
namespace SimoneBaldini\ORM;

class UserMeta extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function getTable()
    {
        return 'usermeta';
    }

    public function user()
    {
        return $this->hasOne('\SimoneBaldini\ORM\User', 'user_id');
    }
}
