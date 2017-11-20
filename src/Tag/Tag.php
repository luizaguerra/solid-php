<?php

namespace Solid\Html\Tag;

use Solid\Html\Tag\TagsContract;


abstract class Tag implements TagsContract
{
    protected $attrs;
    
    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validade();

    }
}