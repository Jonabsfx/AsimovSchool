<?php

namespace AsimovSchool\Solid\Service;

use AsimovSchool\Solid\Model\AsimovPlus;
use AsimovSchool\Solid\Model\Course;
use AsimovSchool\Solid\Model\ScoreInterface;

class ScoreCalculator
{
    public function getScore(ScoreInterface $content)
    {
       return $content->getScore();
    }
}
