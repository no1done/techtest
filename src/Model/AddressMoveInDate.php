<?php

namespace Application\Model;

use DateTime;

/**
 * @class Application\Model\AddressMoveInDate
 */
class AddressMoveInDate extends Validator {

    /** @var DateTime $address_move_in_date */
    protected DateTime $address_move_in_date;

    /** @var string $label */
    protected string $label = "";

    /**
     * Getter
     * @return DateTime
     */
    public function get(): DateTime
    {
        return $this->address_move_in_date;
    }

    /**
     * Setter
     * @param DateTime $address_move_in_date
     */
    public function set(DateTime $address_move_in_date): void
    {
        $this->validate($address_move_in_date);
        $this->address_move_in_date = $address_move_in_date;
    }

    /**
     * Validator
     * @param DateTime $val
     */
    protected function validate(DateTime $val): void
    {
        // Do validation - throw exception if invalid
        $this->isPastDate($val);
    }
}