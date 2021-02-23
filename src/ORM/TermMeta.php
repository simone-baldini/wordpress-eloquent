<?php
namespace SimoneBaldini\ORM;

class TermMeta extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function getTable()
    {
        return 'termmeta';
    }

    public function term()
    {
        return $this->hasOne('\SimoneBaldini\ORM\Term', 'term_id');
    }
}
