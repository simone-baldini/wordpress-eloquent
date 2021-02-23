<?php
namespace SimoneBaldini\ORM;

class Term extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'term_id';
    public $timestamp = false;

    public function meta()
    {
        return $this->hasMany('SimoneBaldini\ORM\TermMeta', 'term_id');
    }

    public function taxonomy()
    {
        return $this->hasMany('SimoneBaldini\ORM\TermTaxonomy', 'term_id');
    }
}
