<?php

namespace Application\Model;

use DateTime;

/**
 * @class Application\Model\EmploymentStartDate
 */
class EmploymentStartDate extends Validator {

    /** @var DateTime $employment_start_date */
    protected DateTime $employment_start_date;

    /** @var string $label */
    protected string $label = "Employment Start Date";

    /**
     * Getter
     * @return DateTime
     */
    public function get(): DateTime
    {
        return $this->employment_start_date;
    }

    /**
     * Setter
     * @param DateTime $employment_start_date
     */
    public function set(DateTime $employment_start_date): void
    {
        // Validate
        $this->validate($employment_start_date);

        $this->employment_start_date = $employment_start_date;
    }

    /**
     * Validator
     * @param DateTime $val
     */
    protected function validate(DateTime $val): void
    {
        $this->isPastDate($val);
    }
}