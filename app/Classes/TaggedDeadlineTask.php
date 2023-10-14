<?php

namespace app\Classes;

use app\Classes\DedlineTask;
use app\Traits\HasAssigneeTrait;
use app\Traits\HasTagTraits;

class TaggedDeadlineTask extends DedlineTask
{
    use HasTagTraits, HasAssigneeTrait;
}
