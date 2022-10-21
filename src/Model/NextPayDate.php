<?php

namespace Application\Model;

use DateTime;

/**
 * @class Application\Model\NextPayDate
 */
class NextPayDate extends Validator {

    /** @var string $label */
    protected string $label = "Next Pay Date";

    /** @var DateTime $next_pay_date */
    protected DateTime $next_pay_date;

    /**
     * Getter
     * @return DateTime
     */
    public function get(): DateTime
    {
        return $this->next_pay_date;
    }

    /**
     * Setter
     * @param DateTime $next_pay_date
     */
    public function set(DateTime $next_pay_date): void
    {
        $this->validate($next_pay_date);
        $this->next_pay_date = $next_pay_date;
    }

    /**
     * Validator
     * @param DateTime $val
     */
    protected function validate(DateTime $val): void
    {
        $this->isFutureDate($val);
        $this->isWeekDay($val);
    }
}