<?php

namespace AsimovSchool\Solid\Model;

interface ScoreInterface{
    
    public function getScore():int;
    public function watch(): void;
}