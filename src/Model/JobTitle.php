<?php

namespace Application\Model;

/**
 * @class Application\Model\JobTitle
 */
class JobTitle extends Validator {

    /** @var string $job_title */
    protected string $job_title;

    /** @var string $label */
    protected string $label = "Job Title";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->job_title;
    }

    /**
     * Setter
     * @param string $job_title
     */
    public function set(string $job_title): void
    {
        $this->validate($job_title);
        $this->job_title = $job_title;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->minStrLen($val, 2);
    }
}