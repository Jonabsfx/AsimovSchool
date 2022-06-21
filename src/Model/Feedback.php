<?php

namespace AsimovSchool\Solid\Model;

class Feedback{

    private int $grade;
    private string $description;

    public function __construct(int $grade, ?string $description)
    {   
        if ($grade < 9 && empty($description)) {
            throw new \DomainException('Don\'t forget to write a message about the course');
        }

        $this->grade = $grade;
        $this->description = $description;
    }
}