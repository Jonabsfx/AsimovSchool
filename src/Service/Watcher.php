<?php

namespace AsimovSchool\Solid\Service;

use AsimovSchool\Solid\Model\AsimovPlus;
use AsimovSchool\Solid\Model\Course;
use AsimovSchool\Solid\Model\ScoreInterface;

class Watcher
{
    public function watch(ScoreInterface $content){
        $content->watch();
    }
}
