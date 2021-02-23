<?php
namespace SimoneBaldini\ORM;

class TermRelationship extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    public function getTable()
    {
        return 'term_relationships';
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query->where('object_id', '=', $this->getAttribute('object_id'))
            ->where('term_taxonomy_id', '=', $this->getAttribute('term_taxonomy_id'));
        return $query;
    }

    public function taxonomy()
    {
        return $this->hasOne('\SimoneBaldini\ORM\TermTaxonomy', 'term_taxonomy_id');
    }
}
