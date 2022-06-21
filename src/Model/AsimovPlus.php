<?php

namespace AsimovSchool\Solid\Model;

class AsimovPlus extends Video implements ScoreInterface
{
    private $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function recuperarUrl(): string
    {
        $slugCategory = new Slug($this->category);
        $slugName = new Slug($this->name);

        return 'http://videos.alura.com.br/' . $slugCategory. '/' . $slugName;
    }

    public function getScore(): int 
    {
        return $this->durationInMinutes()*2;
    }
}
