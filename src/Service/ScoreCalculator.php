<?php

namespace Asimov\Solid\Service;

use Asimov\Solid\Model\AsimovSchool;
use Asimov\Solid\Model\Course;

class ScoreCalculator
{
    public function getScore($content)
    {
        if ($content instanceof Course) {
            return 100;
        } else if ($content instanceof AsimovSchool) {
            return $content->durationInMinutes() * 2;
        } else {
            throw new \DomainException('Only AsimovSchool courses has score');
        }
    }
}
