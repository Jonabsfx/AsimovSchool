<?php

namespace AsimovSchool\Solid\Service;

use AsimovSchool\Solid\Model\AsimovPlus;
use AsimovSchool\Solid\Model\Course;

class Watcher
{
    public function watchCourse(Course $course)
    {
        foreach ($course->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAsimovPlus(AsimovPlus $AsimovPlus)
    {
        $AsimovPlus->watch();
    }
}
