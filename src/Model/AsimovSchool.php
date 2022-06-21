<?php

namespace AsimovSchool\Solid\Model;

class AsimovPlus extends Video
{
    private $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function recuperarUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }
}
