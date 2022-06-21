<?php

namespace AsimovSchool\Solid\Service;


use AsimovSchool\Solid\Model\WatchInterface;

class Watcher
{
    public function watch(WatchInterface $content){
        $content->watch();
    }
}
