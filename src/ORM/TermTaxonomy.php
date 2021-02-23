<?php
namespace SimoneBaldini\ORM;

class TermTaxonomy extends \Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'term_taxonomy_id';
    public $timestamps = false;

    public function getTable()
    {
        return 'term_taxonomy';
    }

    public function post()
    {
        return $this->hasOne('\SimoneBaldini\ORM\Term', 'term_id');
    }
}
