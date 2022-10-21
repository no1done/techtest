<?php

namespace Application\Model;

/**
 * @class Application\Model\WorkNumber
 */
class WorkNumber extends Validator {

    /** string work_number */
    protected string $work_number;

    protected string $label = "Work Phone Number";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->work_number;
    }

    /**
     * Setter
     * @param string $work_number
     */
    public function set(string $work_number): void
    {
        // Validate
        $this->validate($work_number);

        $this->work_number = $work_number;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->isNotMobileNumber($val);
        $this->isStrLen($val,11);
    }
}