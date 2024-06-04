<?php

namespace App;

class Project
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
