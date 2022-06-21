<?php

namespace AsimovSchool\Solid\Model;

class Course implements ScoreInterface, WatchInterface
{
    private $name;
    private $videos;
    private $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function getFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->durationInMinutes() < 3) {
            throw new \DomainException('Too short');
        }

        $this->videos[] = $video;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getScore(): int
    {
        return 100;
    }

    public function watch(): void
    {
        foreach ($this->getVideos() as $video){
            $video->watch();
        }
    }
}
