<?php

namespace app\Traits;


trait HasTagTraits
{
    protected $tags = [];

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function getTags()
    {
        return $this->tags;
    }
}
