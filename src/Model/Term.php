<?php

namespace Corcel\Model;

use Corcel\Model;
use Corcel\Traits\HasAcfFields;
use Corcel\Traits\HasMetaFields;

/**
 * Class Term.
 *
 * @package Corcel\Model
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Term extends Model
{
    use HasMetaFields;
    use HasAcfFields;

    /**
     * @var string
     */
    protected $table = 'terms';

    /**
     * @var string
     */
    protected $primaryKey = 'term_id';

    /**
     * @var bool
     */
<<<<<<< HEAD:src/Term.php
    public function taxonomy()
    {
        return $this->hasOne(TermTaxonomy::class, 'term_id');
=======
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function taxonomy()
    {
        return $this->hasOne(Taxonomy::class, 'term_id');
>>>>>>> corcel/2.5:src/Model/Term.php
    }
}
