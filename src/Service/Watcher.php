<?php

namespace Asimov\Solid\Service;

use Asimov\Solid\Model\AsimovSchool;
use Asimov\Solid\Model\Course;

class Watcher
{
    public function watchCourse(Course $course)
    {
        foreach ($course->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAsimovSchool(AsimovSchool $AsimovSchool)
    {
        $AsimovSchool->watch();
    }
}
