<?php

namespace Asimov\Solid\Model;

class Video
{
    /** @var bool */
    protected $watched = false;
    /** @var string */
    protected $name;
    /** @var \DateInterval */
    protected $duration;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->watched = false;
        $this->duration = \DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function durationInMinutes(): int
    {
        return $this->duration->i;
    }

    public function getUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['name' => $this->name]);
    }
}
