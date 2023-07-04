<?php

declare(strict_types=1);

namespace PierreCours\Librairyawww;

class Post
{
    public function constructor__(string $name = "", string $tag="")
    {
        $this->name = $name;
        $this->tag = $tag;
    }
}