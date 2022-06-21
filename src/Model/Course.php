<?php

namespace Asimov\Solid\Model;

class Course
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

    public function getFeedback(int $grade, ?string $text): void
    {
        if ($grade < 9 && empty($text)) {
            throw new \DomainException('Don\'t forget to write a message about the course');
        }

        $this->feedbacks[] = [$grade, $text];
    }

    public function addVideo(Video $video)
    {
        if ($video->durationInMinutes() < 3) {
            throw new \DomainException('Too short');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }
}
