<?php

namespace AsimovSchool\Solid\Service;

use AsimovSchool\Solid\Model\AsimovPlus;
use AsimovSchool\Solid\Model\Course;

class ScoreCalculator
{
    public function getScore($content)
    {
        if ($content instanceof Course) {
            return 100;
        } else if ($content instanceof AsimovPlus) {
            return $content->durationInMinutes() * 2;
        } else {
            throw new \DomainException('Only AsimovPlus courses has score');
        }
    }
}
