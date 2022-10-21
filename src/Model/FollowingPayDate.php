<?php

namespace Application\Model;

use DateTime;
use RuntimeException;

/**
 * @class Application\Model\FollowingPayDate
 */
class FollowingPayDate extends Validator {

    /** @var NextPayDate $next_pay_date */
    protected NextPayDate $next_pay_date;

    /** @var DateTime $following_pay_date */
    protected DateTime $following_pay_date;

    /** @var string $label */
    protected string $label = "Following Pay Date";

    /**
     * Getter
     * @return DateTime
     */
    public function get(): DateTime
    {
        return $this->following_pay_date;
    }

    /**
     * Setter
     * @param DateTime $following_pay_date
     */
    public function set(DateTime $following_pay_date): void
    {
        $this->validate($following_pay_date);
        $this->following_pay_date = $following_pay_date;
    }

    /**
     * Set next pay date
     *
     * This is important so we can verify the following pay date is
     * within 45 days of the next pay date.
     *
     * @param NextPayDate $date
     * @return void
     */
    public function setNextPayDate(NextPayDate $date): void
    {
        $this->next_pay_date = $date;
    }

    /**
     * Validator
     * @param DateTime $val
     */
    protected function validate(DateTime $val): void
    {
        $this->isFutureDate($val);

        if (!isset($this->next_pay_date)) throw new RuntimeException(
            "Next pay date must be set before setting Following Pay Date"
        );

        // Must be within 45 days of next pay date
        $diff = $this->next_pay_date->get()->diff($val);

        if ($diff->days < 1 || $diff->days > 45) throw new RuntimeException(
            "Invalid following pay date - must be within 45 days of next pay date."
        );
    }
}