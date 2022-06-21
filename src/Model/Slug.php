<?php

namespace AsimovSchool\Solid\Model;

final class Slug{
    private $slug;

    public function __construct(string $content)
    {
        $this->slug = str_replace(' ', '-', strtolower($content));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}