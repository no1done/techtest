<?php

namespace Application\Model;

use DateTime;

/**
 * @class Application\Model\DateOfBirth
 */
class DateOfBirth extends Validator {

    /** @var DateTime $date_of_birth */
    protected DateTime $date_of_birth;

    /** @var string $label */
    protected string $label = "Date of Birth";

    /**
     * Getter
     * @return DateTime
     */
    public function get(): DateTime
    {
        return $this->date_of_birth;
    }

    /**
     * Setter
     * @param DateTime $date_of_birth
     */
    public function set(DateTime $date_of_birth): void
    {
        $this->validate($date_of_birth);
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * Validator
     * @param DateTime $val
     */
    protected function validate(DateTime $val): void
    {
        // Must be over 18 years of age.
        $this->ageCheckFromDOB($val, 18);
    }
}